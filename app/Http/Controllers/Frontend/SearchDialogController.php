<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;

class SearchDialogController extends Controller
{
    public function index()
    {

        $categories = Category::where('id', '!=', 0)->get();
        $products = Product::with('category')->get();

        $response = [
            'categories' => $categories,
            'products' => $products,

        ];
        return response($response, 201);
    }
}
