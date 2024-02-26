<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{

    public function definition()
    {
        $category = $this->faker->unique()->randomElement(
            [
                'Mammals',
                'Birds',
                'Reptiles',
                'Amphibians',
                'Fish',
                'Invertebrates',
                'Unknown'
            ]
        );

        return [
            'category' => $category
        ];
    }
}
