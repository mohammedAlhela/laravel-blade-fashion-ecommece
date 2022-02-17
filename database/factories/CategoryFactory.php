<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $imagesArray = array(
            '/images/categories/pants.jpg',
            '/images/categories/jackets.jpg',
            '/images/categories/form.jpg',
            '/images/categories/dresses.jpg',
        );

        $namesArray = array(
            'pants',
            'jackets',
            'form',
            'dresses',

        );

        return [
            'name' => $this->faker->unique()->randomElement($namesArray),
            'description' => $this->faker->unique()->text(),
            'image' => $this->faker->unique()->randomElement($imagesArray),
        ];
    }
}
