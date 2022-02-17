<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\ProductDetailsController;
use App\Http\Controllers\Frontend\SearchDialogController;
use App\Http\Controllers\Frontend\ShopController;
use App\Http\Controllers\Frontend\WhishlistController;
use App\Http\Controllers\Frontend\CartController;

use App\Http\Controllers\Ui\HomeController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get("/", [HomeController::class, "index"]);
Route::get("/shop", [ShopController::class, "index"]);
// Route::get('/home', function () {
//     return view('home');
// })->name('home');




// customers api routes ++++++++++++++++++++++++++++++++
// Route::get("/frontend/homePage/getCategories", [HomePageController::class, "getCategories"]);
// Route::get("/frontend/homePage/getData", [HomePageController::class, "index"]);
// Route::get("/frontend/searchDialog/getData", [SearchDialogController::class, "index"]);
// Route::get("/frontend/shop/getData", [ShopController::class, "index"]);
// Route::get("/frontend/productDetails/getData/{slug}", [ProductDetailsController::class, "index"]);
// // whishlist
// Route::get("/whishlists", [WhishlistController::class, "index"]);
// Route::delete("/whishlist/{whishlist}", [WhishlistController::class, "delete"]);
// Route::post("/whishlist/add", [WhishlistController::class, "add"]);
// // whishlist
// // carts
// Route::get("/carts", [CartController::class, "index"]);
// Route::delete("/cart/{cart}", [CartController::class, "delete"]);
// Route::post("/cart/add", [CartController::class, "add"]);
// carts
// customers api routes  ++++++++++++++++++++++++++++++++




// customers web routes  ++++++++++++++++++++++++++++++++


// customers web routes  ++++++++++++++++++++++++++++++++
