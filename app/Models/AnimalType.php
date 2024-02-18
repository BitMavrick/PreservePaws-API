<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnimalType extends Model
{
    use HasFactory;

    public function animal()
    {
        return $this->belongsTo(Animal::class);
    }

    public function animalCategory()
    {
        return $this->belongsTo(AnimalCategory::class);
    }
}
