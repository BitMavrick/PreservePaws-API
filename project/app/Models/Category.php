<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    // * One-to-many relationship between Categoy and Type

    public function types()
    {
        return $this->hasMany(Type::class);
    }
}
