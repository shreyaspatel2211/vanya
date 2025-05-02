<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'phone_number', 'experience', 'images', 'address',
        'description', 'qualification', 'booking_fees', 'city', 'doctor_category_id'
    ];

    public function category()
    {
        return $this->belongsTo(DoctorsCategory::class, 'doctor_category_id');
    }
}
