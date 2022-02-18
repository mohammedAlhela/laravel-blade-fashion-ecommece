<?php

namespace App\Http\Controllers\Ui;

use App\Http\Controllers\Controller;
use App\Http\Resources\Sections\ProductsResource;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\Size;
use App\Models\Tag;

class ShopController extends Controller
{
    public function index()
    {

        $products = collect(ProductsResource::collection(Product::
                with(['brand', 'category', 'subCategory', 'variations', 'tags', 'colors', 'sizes'])->get()));

        $categories = Category::with('subCategories')->where('id', '!=', 0)->get();

        $brands = Brand::where('id', '!=', 0)->get();

        $tags = Tag::where('id', '!=', 0)->get();

        $sizes = Size::where('id', '!=', 0)->get();

        $colors = Color::where('id', '!=', 0)->get();

        return view('shop', compact('categories', 'products', 'sizes', 'colors', 'brands', 'tags'));

    }
}
