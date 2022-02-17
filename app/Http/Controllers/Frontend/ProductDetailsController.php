<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Resources\Sections\ProductsResource;
use App\Models\Product;

class ProductDetailsController extends Controller
{
    public function index($slug)
    {

        $productArrayWraper = collect(ProductsResource::collection(Product::
                with(['brand', 'category', 'subCategory', 'variations', 'tags', 'colors', 'sizes'])->where('slug', $slug)->get()));

        $product = $productArrayWraper->first();

        $relatedProducts = collect(ProductsResource::collection(Product::
                with(['brand', 'category', 'subCategory', 'variations', 'tags', 'colors', 'sizes'])
                ->where('brand_id', Product::where('slug', $slug)->get()->first()->brand_id)
                ->where('id', '!=', Product::where('slug', $slug)->get()->first()->id)
                ->limit(8)->get()));

        $response = [
            'product' => $product,
            'relatedProducts' => $relatedProducts,
        ];
        return response($response, 201);
    }

}
