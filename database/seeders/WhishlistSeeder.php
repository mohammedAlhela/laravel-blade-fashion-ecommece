<?php

namespace Database\Seeders;

use App\Models\Whishlist;
use App\Models\User;
use App\Models\Product;
use DB;
use Illuminate\Database\Seeder;

class WhishlistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function getRandomProductsIdsArray()
    {

        $arrayData = array();

        $productsIds = Product::pluck('id')->all();

        $randomKeys = array_rand( $productsIds , 2);

        foreach ($randomKeys as $randomKey) {
            array_push($arrayData, $productsIds[$randomKey]);
        }

        return $arrayData;

    }

    public function run()
    {

        $usersIds = User::where('role' , 'customer')->pluck('id')->all();

        foreach ($usersIds as $userId) {

            foreach ($this->getRandomProductsIdsArray() as $productId) {

                DB::table('whishlists')->insert([
                    'user_id' => $userId,
                    'product_id' => $productId,
                ]);

            }
        }

    }

}
