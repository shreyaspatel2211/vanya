<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetHostelPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'pet_hostel_id', 'description'
    ];
}
