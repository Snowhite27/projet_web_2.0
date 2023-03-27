<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function index() {
        return view('activities', [
            "activities" => Activity::all()
        ]);
    }

    public function add() {
        return view('admin.activities.add');
    }

    public function addSubmit(Request $input) {
        $input->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time().'.'.$input->picture->extension();
        $input->picture->move(public_path('images/activities/'), $imageName);

        Activity::create([
            'name' => $input->name,
            'description' => $input->description,
            'picture' => $imageName
        ]);

        return redirect()->route('admin.activities');
    }

    public function edit($id, $alerts = null) {
        $activity = DB::table('activities')->where('id', $id)->get()->first();

        return view('admin.activities.edit')->with([
            'activity' => $activity,
            'alerts' => $alerts
        ]);
    }

    public function editSubmit($id, Request $input) {
        $activity = Activity::find($id);
        $activity->name = $input->name;
        $activity->description = $input->description;

        if ($input->picture) {
            $input->validate(['picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

            $imageName = time().'.'.$input->picture->extension();
            $input->picture->move(public_path('images/activities/'), $imageName);
            $activity->picture = $imageName;
        }

        $input->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string']
        ]);

        $activity->update();
        return redirect()->route('admin.activities');
    }

    public function remove($id, Activity $activity) {
        $activity = Activity::find($id);
        $activity->delete();
        return redirect()->route('admin.activities');
    }
}
