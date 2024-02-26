<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    use HasFactory;

    // * One-to-many relationship between Categoy and Type

    public function categories()
    {
        return $this->belongsTo(Category::class);
    }

    // * Many-to-one relationship between Animal and Type

    public function animals()
    {
        return $this->hasMany(Animal::class);
    }
}
