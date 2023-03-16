<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    public function index()
    {

        $packages = Package::all();
        return view("reservations", [
            "packages" => $packages
        ]);
    }
}
