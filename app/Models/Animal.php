<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    // * Many-to-one relationship between Animal and Type

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
