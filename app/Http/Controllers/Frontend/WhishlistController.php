<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Whishlist;
use Illuminate\Http\Request;

class WhishlistController extends Controller
{

    public function __construct()
    {

        $this->middleware(

            'auth');

    }

    public function index()
    {

        $whishlists = User::where('id', auth()->user()->id)->with('whishlists')->get()->first()->whishlists;

        $response = [
            'whishlists' => $whishlists,

        ];
        return response($response, 201);
    }

    public function delete($id)
    {

        $whishlist = Whishlist::where('product_id', $id)->where('user_id', auth()->user()->id)->get()->first();
        $whishlist->delete();
        $response = [
            'message' => 'whishlist deleted successfully',
        ];
        return response($response, 201);
    }

    public function add(Request $request)
    {

        if (count(Whishlist::where('user_id', $request->user_id)->where('product_id', $request->product_id)->get())) {
            $response = [
                'message' => 'whishlist alreadt added',
            ];
        } else {
            $whishlist = new Whishlist;
            $whishlist->user_id = $request->user_id;
            $whishlist->product_id = $request->product_id;
            $whishlist->save();
            $response = [
                'whishlist' => $whishlist,
            ];

        }

        return response($response, 201);
    }

}
