<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorBookingAppointment extends Model
{
    use HasFactory;

    protected $fillable = [
        'breed_id', 'parent_name', 'phone_number', 'email', 'gender',
        'dob', 'pet_name', 'category_id', 'doctor_id', 'user_id', 'booking_date', 'booking_time'
    ];
}
