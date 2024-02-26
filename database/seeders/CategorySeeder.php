<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {

        // * Specific category
        $categories = [
            ['category' => 'Mammals'],
            ['category' => 'Birds'],
            ['category' => 'Reptiles'],
            ['category' => 'Amphibians'],
            ['category' => 'Fish'],
            ['category' => 'Invertebrates'],
            ['category' => 'Unknown'],
        ];

        // * Seeding ----
        Category::insert($categories);
    }
}
