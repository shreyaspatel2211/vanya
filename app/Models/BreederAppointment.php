<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BreederAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'breed_id', 'parent_name', 'phone_number', 'email', 'gender', 'booking_date', 'booking_time',
        'dob', 'pet_name', 'category_id', 'breeder_id', 'user_id'
    ];
}
