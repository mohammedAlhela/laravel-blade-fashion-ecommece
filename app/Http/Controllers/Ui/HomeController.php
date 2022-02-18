<?php

namespace App\Http\Controllers\Ui;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Slider;


class HomeController extends Controller
{
    public function index()
    {

        $categories = Category::with(['subCategories', 'products'])->where('id' , '!=' , 0)->get();


        $sliders = Slider::with('images')->where('status' , 1)->get();


        $newArrivalProducts = Product::where('featured', 1)
                ->with('category')->limit(4)->get();


        $myProducts = Product::orderBy('created_at', 'DESC')->where('featured', 0)
        ->with('category')->limit(8)->get();




        return view('home' , compact('categories' , 'sliders' , 'newArrivalProducts' , 'myProducts'));


    }

}


