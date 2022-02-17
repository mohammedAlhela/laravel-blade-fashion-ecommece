<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name = $this->faker->unique()->name() ;
        return [
            'name' =>  $name,
            'slug' => str_replace(" " , "-" , $name)  ,
            'category_id' => $this->faker->numberBetween(1,4),
            'sub_category_id' => $this->faker->numberBetween(1,16),
            'brand_id' => $this->faker->numberBetween(1,4),
            'code' => Str::random(8),
            'short_description' =>  $this->faker->text(80),
            'long_description' =>  $this->faker->text(500),
            'selling_price' => $this->faker->numberBetween(500, 1000),
            'discount_price' => $this->faker->numberBetween(50, 200),
            'status' => rand(0 , 1),
            'featured' => rand(0 , 1),
            'preview_image' => '/images/products/preview/preview.jpg',
            'created_at' => now(),
            'updated_at' => now(),


        ];
    }
}
