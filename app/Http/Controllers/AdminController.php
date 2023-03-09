<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index() {
        $user = auth()->user();
        $user_list = DB::table('users')
            ->join('types', 'users.user_type', '=', 'types.id')
            ->select('users.id', 'first_name', 'last_name', 'email', 'profile_picture', 'user_type', 'name')
            ->get();

        $articles = DB::table('news');

        return view('admin.index')->with([
            'user' => $user,
            'user_list' => $user_list,
            'articles' => $articles
        ]);
    }
}
