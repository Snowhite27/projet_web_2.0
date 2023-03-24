<?php

namespace App\Http\Controllers;

use App\Models\Package;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationsController extends Controller
{
    /**
     * Affiche la vue de la page réservation
     *
     * @return void
     */
    public function index()
    {

        $packages = Package::all();
        if (isset(auth()->user()->id)) {
            $user = auth()->user();
            $reservations = $user->reservations;
            // dd($reservations);
            // $reservation_packages = $reservations->reservationPackages;
            // $reservations = Reservation::all()->where("id", "=", auth()->user()->id);
            return view("reservations", [
                "packages" => $packages,
                // "reservation_packages" => $reservation_packages,
                "reservations" => $reservations
            ]);
        }
        return view("reservations", [
            "packages" => $packages
        ]);
    }


    /**
     * Api qui recupère un forfait spécifique
     *
     * @param [type] $id - id du forfait sélectionné
     * @return void j.son
     */
    public function get($id)
    {
        $package = Package::find($id);

        return response()->json([
            'id' => $package->id,
            'reservation_id' => $package->reservation_id,
            'name' => $package->name,
            'duration' => $package->duration,
            'description' => $package->description,
            'includes' => $package->includes,
            'picture' => $package->picture,
            'price' => $package->price,
        ]);
    }

    public function getCalendar($month, $year)
    {
        // Get all days from the month
        $days = [];

        $first_of_month = mktime(0, 0, 0, $month, 1, $year);
        $first_of_next_month = mktime(0, 0, 0, $month + 1, 1, $year);

        $date = $first_of_month;

        while ($date < $first_of_next_month) {

            $days[] = [
                "date" => date('j', $date),
                "date_unix_time" => $date,
            ];

            $date = strtotime('+1 day', $date);
        }

        // get day of week for first day of month
        $first_day_offset = ((int) date('N', $first_of_month)) % 7;
        $last_day_offset = 7 - ((int) date('N', $first_of_next_month));

        $output = [
            "blank_starting_days" => $first_day_offset,
            "blank_ending_days" => $last_day_offset,
            "days" => $days,
        ];

        echo json_encode($output, JSON_PRETTY_PRINT);
    }

    /**
     * Api qui envoie les infos de la reservation
     *
     * @param Request $request
     * @return void
     */
    public function save(Request $request)
    {
        // Valider
        $request->validate([
            'package_id' => 'required',
            'user_id' => 'required',
            'event_date' => 'required',
        ], [
            'package_id.required' => 'Troubles niveau forfait',
            'user_id.required' => 'Trouble niveau user',
            'event_date.required' => 'Trouble niveau de la date',
        ]);

        Reservation::create([
            'package_id' => $request->package_id,
            'user_id' => $request->user_id,
            'event_date' => $request->event_date
        ]);
    }
}
