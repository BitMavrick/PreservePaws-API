<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AnimalType>
 */
class AnimalTypeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'type_name' => $this->faker->word(),
            'animal_id' => \App\Models\Animal::factory(),
            'animal_category_id' => \App\Models\AnimalCategory::factory(),
        ];
    }
}
