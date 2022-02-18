<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomePageController;
use App\Http\Controllers\Frontend\ProductDetailsController;
use App\Http\Controllers\Frontend\SearchDialogController;

use App\Http\Controllers\Frontend\WhishlistController;
use App\Http\Controllers\Frontend\CartController;

use App\Http\Controllers\Ui\HomeController;
use App\Http\Controllers\Ui\ShopController;


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
Route::get("/shop", [ShopController::class, "showPage"]);
Route::get("/shop/fetchData", [ShopController::class, "fetchData"]);
// Route::get('/home', function () {
//     return view('home');
// })->name('home');






// customers web routes  ++++++++++++++++++++++++++++++++


// customers web routes  ++++++++++++++++++++++++++++++++
