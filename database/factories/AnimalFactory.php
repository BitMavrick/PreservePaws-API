<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Animal>
 */
class AnimalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'updated_date' => $this->faker->date(),
            'image_url' => $this->faker->imageUrl(),
            'name' => $this->faker->unique()->word(),
            'sci_name' => $this->faker->optional()->word(),
            'animal_fact' => $this->faker->optional()->sentence(),
            'population_status' => $this->faker->randomElement(['Endangered', 'Critically Endangered', 'Vulnerable', 'Near Threatened', 'Least Concern']),
            'habitat' => $this->faker->paragraph(),
            'conservation_efforts' => $this->faker->optional()->sentence(),
            'threat_factors' => $this->faker->optional()->sentence(),
            'animal_type_id' => \App\Models\AnimalType::factory(),
        ];
    }
}
