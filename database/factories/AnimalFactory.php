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

        $categories = ['Mammals', 'Birds', 'Reptiles', 'Amphibians', 'Fish', 'Invertebrates', 'Unknown'];
        $types = [
            'Mammals' => ['Carnivores', 'Herbivores', 'Omnivores'],
            'Birds' => ['Raptors', 'Waterfowl', 'Songbirds'],
            'Reptiles' => ['Snakes', 'Turtles', 'Lizards'],
            'Amphibians' => ['Frogs', 'Toads', 'Newts'],
            'Fish' => ['Freshwater', 'Saltwater', 'Anadromous'],
            'Invertebrates' => ['Insects', 'Arachnids', 'Mollusks'],
            'Unknown' => ['Unknown']
        ];

        $category = $this->faker->randomElement($categories);
        $type = $this->faker->randomElement($types[$category]);

        return [
            'updated_date' => $this->faker->date(),
            'image_url' => $this->faker->imageUrl(),
            'name' => $this->faker->unique()->word(),
            'sci_name' => $this->faker->word(),
            'category' => $category,
            'type' => $type,
            'animal_fact' => $this->faker->paragraph(),
            'population_status' => $this->faker->randomElement(['Endangered', 'Critically Endangered', 'Vulnerable', 'Near Threatened', 'Least Concern']),
            'population_count_est' => $this->faker->numberBetween(100, 10000),
            'habitat' => $this->faker->optional()->paragraph(),
            'conservation_efforts' => $this->faker->optional()->paragraph(),
            'threat_factors' => $this->faker->optional()->paragraph(),
        ];
    }
}
