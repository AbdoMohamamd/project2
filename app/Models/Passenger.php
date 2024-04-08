<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Passenger extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'email',
        'password',
        'dob',
        'passport_expiry_date',
        'flight_id'
    ];
    public function flights()
    {
        return $this->belongsTo(Flight::class);
    }
}
