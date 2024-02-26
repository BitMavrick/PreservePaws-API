<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

class TypeFactory extends Factory
{
    public function definition()
    {

        /*
        * Maybe usefull
        $type = $this->faker->unique()->randomElement(
            [
                // * For Mammals
                'Carnivorse',
                'Herbivorse',
                'Omnivorse',

                // * For Birds
                'Raptors',
                'Waterfowl',
                'Songbirds',

                // * For Reptiles
                'Snakes',
                'Turtles',
                'Lizards',

                // * For Amphibians
                'Frogs',
                'Toads',
                'Lizards',

                // * For Fish
                'Freshwater',
                'Saltwater',
                'Anadromous',

                // * For Invertebrates
                'Insects',
                'Arachnis',
                'Mollusks',

                // * For Unknown Types
                'Unknown'
            ]
        );

        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'type' => $type
        ];
        */

        $types = [];
        $category = Category::inRandomOrder()->first();


        switch ($category->category) {
            case 'Mammals':
                $types = ['Carnivore', 'Herbivore', 'Omnivore', 'Unknown'];
                break;
            case 'Birds':
                $types = ['Raptors', 'Waterfowl', 'Songbirds', 'Unknown'];
                break;
            case 'Reptiles':
                $types = ['Snakes', 'Turtles', 'Lizards', 'Unknown'];
                break;
            case 'Amphibians':
                $types = ['Frogs', 'Toads', 'Salamanders', 'Unknown'];
                break;
            case 'Fish':
                $types = ['Freshwater', 'Saltwater', 'Anadromous', 'Unknown'];
                break;
            case 'Invertebrates':
                $types = ['Insects', 'Arachnids', 'Mollusks', 'Unknown'];
                break;
            case 'Unknown':
                $types = [
                    'Carnivore', 'Herbivore', 'Omnivore',
                    'Raptors', 'Waterfowl', 'Songbirds',
                    'Snakes', 'Turtles', 'Lizards',
                    'Frogs', 'Toads', 'Salamanders',
                    'Freshwater', 'Saltwater', 'Anadromous',
                    'Insects', 'Arachnids', 'Mollusks', 'Unknown'
                ];
                break;
            default:
                $types = ['Unknown'];
        }

        // * Randomly selected type based on its category
        $type = $this->faker->unique()->randomElement($types);

        return [
            'category_id' => $category->id,
            'type' => $type
        ];
    }
}
