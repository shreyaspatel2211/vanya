<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WellnessAndGrooming extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'experience', 'phone_number',
        'email', 'city', 'address', 'images', 'user_id'
    ];
}
