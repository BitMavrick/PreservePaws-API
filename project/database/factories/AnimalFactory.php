<?php

namespace Database\Factories;

use App\Models\Type;
use Illuminate\Database\Eloquent\Factories\Factory;


class AnimalFactory extends Factory
{
    public function definition()
    {
        $population_status = $this->faker->randomElement(
            [
                // ! Danger priority high to low -------------
                'Endangered',
                'Critically Endangered',
                'Vulnerable',
                'Near Threatened',
                'Least Concern'
            ]
        );

        return [
            'type_id' => Type::inRandomOrder()->first()->id,
            'updated_date' => $this->faker->date(),
            'image_url' => $this->faker->imageUrl(),
            'name' => $this->faker->unique()->name(),
            'sci_name' => $this->faker->unique()->word(),
            'animal_fact' => $this->faker->paragraph(),
            'population_status' => $population_status,
            'population_count_est' => $this->faker->numberBetween(10, 2000),
            'habitat' => $this->faker->sentence(),
            'conservation_efforts' => $this->faker->paragraph(),
            'threat_factors' => $this->faker->paragraph(),
        ];
    }
}
