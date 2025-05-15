<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PetDate extends Model
{
    use HasFactory;

    protected $fillable = [
        'breed_id', 'parent_name', 'phone_number', 'email', 'gender',
        'dob', 'pet_name', 'category_id', 'images', 'user_id'
    ];

    public function breeds()
    {
        return $this->belongsTo(Breed::class, 'breed_id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
