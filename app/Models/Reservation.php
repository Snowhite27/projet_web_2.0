<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_id',
        'user_id',
        'event_date'
    ];

    public function reservationPackages()
    {
        return $this->hasMany(Package::class);
    }
}
