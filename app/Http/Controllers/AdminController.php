<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index()
    {
        $user = auth()->user();
        $user_list = DB::table('users')
            ->join('types', 'users.user_type', '=', 'types.id')
            ->select('users.id', 'first_name', 'last_name', 'email', 'profile_picture', 'user_type', 'name')
            ->get();

        return view('admin.index')->with([
            'user' => $user,
            'user_list' => $user_list
        ]);
    }

    public function showArticles()
    {
        $articles = DB::table('articles')->get()->sortByDesc('updated_at');

        return view('admin.articles.index')->with([
            'articles' => $articles
        ]);
    }

    public function showPackages()
    {
        $packages = DB::table('packages')->get()->sortBy('price');

        return view('admin.packages.index')->with([
            'packages' => $packages
        ]);
    }

    public function showActivities()
    {
        $activities = DB::table('activities')->get();

        return view('admin.activities.index')->with([
            'activities' => $activities
        ]);
    }

    public function showReservations()
    {
        $packages = Package::all();
        $reservations = Reservation::all();
        $users = User::all();

        return view('admin.reservations.index')->with([
            'reservations' => $reservations,
            'packages' => $packages,
            'users' => $users
        ]);
    }
}
