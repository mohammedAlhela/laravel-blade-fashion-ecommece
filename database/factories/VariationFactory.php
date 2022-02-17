<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Variation;

class VariationFactory extends Factory
{

          /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Variation::class;


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        return [
            'color_id' => $this->faker->numberBetween(1, 6),
            'size_id' => $this->faker->numberBetween(1, 4),
            'product_id' => $this->faker->numberBetween(1, 40),
            'sku' => Str::random(8),
            'selling_price' => $this->faker->numberBetween(500, 1000),
            'discount_price' => $this->faker->numberBetween(50, 200),
            'stock_qty' => $this->faker->numberBetween(10, 50),
            'big_image' => '/images/products/variations/big/big.jpg',
            'small_image' => '/images/products/variations/small/small.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
