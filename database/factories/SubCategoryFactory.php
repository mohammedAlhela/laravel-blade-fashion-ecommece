<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SubCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {



        return [
            'name' => $this->faker->unique()->name(),
            'category_id' => $this->faker->numberBetween(1,4),

        ];
    }
}
