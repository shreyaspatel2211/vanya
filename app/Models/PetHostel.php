<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetHostel extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'pick_up_time', 'drop_time', 'phone_number',
        'email', 'city', 'address', 'images'
    ];
}
