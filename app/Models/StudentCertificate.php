<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCertificate extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_number',
        'first_name',
        'last_name',
        'dob',
        'place_of_birth',
        'email',
        'specialty',
        'contact',
        'guardian_name',
        'location',
        'emergency_number',
        'img'
    ];
}
