<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    public function run()
    {
        // * Just chill and seeding -------
        Type::factory()->count(100)->create();
    }
}
