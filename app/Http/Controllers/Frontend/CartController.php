<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Cart;
use App\Models\User;
use DB;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function __construct()
    {

        $this->middleware(
            'auth');
    }

    public function index()
    {

        $carts = User::where('id', auth()->user()->id)->with('carts')->get()->first()->carts;

        if (count($carts)) {
            foreach ($carts as $cart) {
                $cart->product_name = DB::table('products')->where('id', $cart->product_id)->get()->first()->name;
                $cart->color_name = DB::table('colors')->where('id', $cart->color_id)->get()->first()->name;
                $cart->size_name = DB::table('sizes')->where('id', $cart->size_id)->get()->first()->name;
            }
        }

        $response = [
            'carts' => $carts,

        ];
        return response($response, 201);
    }

    public function delete($id)
    {

        $cart = Cart::where('variation_id', $id)->where('user_id', auth()->user()->id)->get()->first();
        $cart->delete();
        $response = [
            'message' => 'cart deleted successfully',
        ];
        return response($response, 201);
    }

    public function add(Request $request)
    {

        $cartRecord = Cart::where('user_id', $request->user_id)->where('variation_id', $request->variation_id)->get();

        if (count($cartRecord)) {
            $cart = $cartRecord->first;

        } else {
            $cart = new Cart;
            $cart->user_id = $request->user_id;
            $cart->product_id = $request->product_id;
            $cart->variation_id = $request->variation_id;

        }

        $cart->qty = $request->qty;
        $cart->total = $request->exaxt_price * $request->qty;

        $cart->save();
        $response = [
            'cart' => $cart,
        ];

        return response($response, 201);
    }

}
