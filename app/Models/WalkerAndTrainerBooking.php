<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalkerAndTrainerBooking extends Model
{
    use HasFactory;

    protected $fillable = [
        'walker_and_trainer_id', 'walker_and_trainer_plan_id', 'pet_name', 'parent_name',
        'phone_number', 'email', 'gender', 'category_id', 'breed_id', 'address'
    ];
}
