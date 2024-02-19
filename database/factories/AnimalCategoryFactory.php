<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnimalCategory>
 */
class AnimalCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // 1. Mammals, 2. Birds, 3.Reptiles, 4.Amphibians, 5.Fish, 6.Invertebrates, 7. Unknows

        $category = $this->faker->randomElement("Mammals", "Birds", "Reptiles", "Fish", "nvertebrates", "Unknown");


        return [
            "category_name" => $category
        ];
    }
}
