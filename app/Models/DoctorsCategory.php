<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DoctorsCategory extends Model
{
    use HasFactory;

    public function doctors()
    {
        return $this->hasMany(Doctor::class, 'doctor_category_id');
    }
}
