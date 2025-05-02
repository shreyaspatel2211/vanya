<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WalkerTrainerPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'walker_and_trainer_id', 'description'
    ];
}
