<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WellnessAndGroomingBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'wellness_and_grooming_id', 'wellness_grooming_plan_id', 'pet_name', 'parent_name',
        'phone_number', 'email', 'gender', 'category_id', 'breed_id', 'address', 'booking_date', 'booking_time'
    ];
}
