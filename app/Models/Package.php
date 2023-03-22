<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'duration',
        'description',
        'includes',
        'picture',
        'price'
    ];

    public function reservations()
    {
        return $this->belongsTo(Reservation::class);
    }
}
