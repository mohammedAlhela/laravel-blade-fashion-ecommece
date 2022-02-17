<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
use App\Models\Variation;
use DB;
use Illuminate\Database\Seeder;

class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getRandomVariationsIdsArray()
    {

        $arrayData = array();

        $variationsIds = Variation::pluck('id')->all();

        $randomKeys = array_rand($variationsIds, 3);

        foreach ($randomKeys as $randomKey) {
            array_push($arrayData, $variationsIds[$randomKey]);
        }

        return $arrayData;

    }

    public function run()
    {

        $usersIds = User::where('role', 'customer')->pluck('id')->all();

        foreach ($usersIds as $userId) {

            foreach ($this->getRandomVariationsIdsArray() as $variationId) {

                $variation = Variation::find($variationId);
                $qty = rand(1, 10);
                $total = $variation->discount_price ? $variation->discount_price * $qty : $variation->selling_price * $qty;

                DB::table('carts')->insert([
                    'user_id' => $userId,
                    'variation_id' => $variationId,
                    'product_id' => $variation->product_id,
                    'qty' => $qty,
                    'total' => $total,
                ]);

            }
        }

    }

}
