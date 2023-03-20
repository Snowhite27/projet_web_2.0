<?php

namespace App\Http\Controllers;

use App\Models\Package;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PackageController extends Controller
{
    public function index()
    {
        return view('admin.packages');
    }

    public function add()
    {
        return view('admin.packages.add');
    }

    public function addSubmit(Request $input)
    {
        $input->validate([
            'name' => ['required', 'string', 'max:255'],
            'duration' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'],
            'includes' => ['required', 'string'],
            'picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $imageName = time() . '.' . $input->picture->extension();
        $input->picture->move(public_path('images/packages/'), $imageName);

        Package::create([
            'name' => $input->name,
            'duration' => $input->duration,
            'description' => $input->description,
            'includes' => $input->includes,
            'picture' => $imageName,
            'price' => $input->price
        ]);

        return redirect()->route('admin.packages');
    }

    public function edit($id, $alerts = null)
    {
        $package = DB::table('packages')->where('id', $id)->get()->first();

        return view('admin.packages.edit')->with([
            'package' => $package,
            'alerts' => $alerts
        ]);
    }

    public function editSubmit($id, Request $input)
    {
        $package = Package::find($id);
        $package->name = $input->name;
        $package->duration = $input->duration;
        $package->description = $input->description;
        $package->includes = $input->includes;
        $package->price = $input->price;

        if ($input->picture) {
            $input->validate(['picture' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048']);

            $imageName = time() . '.' . $input->picture->extension();
            $input->picture->move(public_path('images/packages/'), $imageName);
            $package->picture = $imageName;
        }

        $input->validate([
            'name' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string']
        ]);

        $package->update();
        return redirect()->route('admin.packages');
    }

    public function remove($id, Package $package)
    {
        $package = Package::find($id);
        $package->delete();
        return redirect()->route('admin.packages');
    }
}
