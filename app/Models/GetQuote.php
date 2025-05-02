<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GetQuote extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'email', 'category', 'breed', 'age'];
}
