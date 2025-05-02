<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetHostelBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'breed_id', 'parent_name', 'phone_number', 'email', 'gender',
        'dob', 'pet_name', 'category_id', 'pet_hostel_id', 'pet_hostel_plan_id', 'user_id'
    ];
}
