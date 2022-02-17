<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id');
            $table->unsignedBigInteger('category_id');
            $table->unsignedBigInteger('sub_category_id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->string('code')->unique();
            $table->float('selling_price');
            $table->float('discount_price')->nullable();
            $table->mediumText('short_description');
            $table->longText('long_description');
            $table->boolean('featured')->default(0);
            $table->boolean('status')->default(1);
            $table->string('preview_image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
