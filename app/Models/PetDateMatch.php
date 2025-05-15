<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetDateMatch extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_who_liked_id', 'user_who_get_like_id',
        'pet_date_who_liked_id', 'pet_date_who_get_like_id'
    ];
}
