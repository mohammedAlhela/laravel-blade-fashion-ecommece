<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;

class HomePageController extends Controllerl
{
    public function index()
    {

        // $categories = Category::with(['subCategories', 'products'])->where('id' , '!=' , 0)->get();


        // $sliders = Slider::with('images')->where('status' , 1)->get();


        // $newArrivalProducts = Product::where('featured', 1)
        //         ->with('category')->limit(16)->get();


        // $myProducts = Product::orderBy('created_at', 'DESC')->where('featured', 0)
        // ->with('category')->limit(24)->get();

        // $data = [
        //     'categories' => $categories,
        //     'sliders' => $sliders,
        //     'myProducts' => $myProducts,
        //     'newArrivalProducts' => $newArrivalProducts,


        // ];

        // return view('index' , compact('data'));


        return "i work";
    }

}
