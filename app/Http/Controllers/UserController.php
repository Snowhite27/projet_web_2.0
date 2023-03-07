<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;

class UserController extends Controller
{
    public function index() {
        $user = auth()->user();
        // $user_list = DB::table('users')->join('types', 'users.user_type', '=', 'types.id')->get();
        $user_list = DB::table('users')
            ->join('types', 'users.user_type', '=', 'types.id')
            ->select('users.id', 'first_name', 'last_name', 'email', 'profile_picture', 'user_type', 'name')
            ->get();


        return view('dashboard')->with([
            'user' => $user,
            'user_list' => $user_list
        ]);
    }

    public function account($id, $alerts = null) {
        if ($id != null) {
            $user = User::findOrFail($id);
            return view('account')->with([
                'user' => $user,
                'alerts' => $alerts
            ]);
        }
        $user = auth()->user();
        return view('account')->with([
            'user' => $user,
            'alerts' => $alerts
        ]);
    }

    public function modify($id, Request $input) {
        if ($input->isMethod('GET')) {
            return redirect()->route('account');
        }

        if ($id != null) {
            $user_id = $id;
        } else {
            $user_id = auth()->user()->id;
        }

        $user = User::find($user_id);
        $user->first_name = $input->first_name;
        $user->last_name = $input->last_name;
        $user->email = $input->email;
        $user->user_type = $input->user_type;

        if($input->password || $input->password_confirmation) {
            $validation = Validator::make($input->all(), ['password' => ['confirmed', Rules\Password::defaults()]]);
            if($validation->fails()) {
                return $this->account($validation->errors()->get('password'));
            }
            $user->password = Hash::make($input->password);
        }

        if ($input->image) {
            $validation = Validator::make($input->all(), ['image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048']);
            if($validation->fails()) {
                return $this->account($validation->errors()->get('image'));
            }
            $imageName = time().'.'.$input->image->extension();
            $input->image->move(public_path('images/user_profile/'), $imageName);
            $user->profile_picture = $imageName;
        }

        $user->update();
        session()->put('user', $user);
        return $this->account($user_id, ['Changes applied']);
    }
}
