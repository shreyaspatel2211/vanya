<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WellnessAndGroomingPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'wellness_and_grooming_id', 'description'
    ];
}
