<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Breeder extends Model
{
    use HasFactory;

    protected $fillable = [
        'breed_id', 'parent_name', 'phone_number', 'email', 'images',
        'description', 'dob', 'pet_name', 'address', 'city', 'category_id', 'user_id'
    ];
    
    public function breeds()
    {
        return $this->belongsTo(Breed::class, 'breed_id');
    }

    public function categories()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
