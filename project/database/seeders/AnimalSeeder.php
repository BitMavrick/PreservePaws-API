<?php

namespace Database\Seeders;

use App\Models\Animal;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    public function run()
    {
        $total_animals = 100;

        // * Seeding ----
        Animal::factory()->count($total_animals)->create();
    }
}
