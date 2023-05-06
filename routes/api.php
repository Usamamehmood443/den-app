<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\FoodCategoryController;
use App\Http\Controllers\RestaurantListingTagController;
use App\Http\Controllers\RestaurantReviewController;
use App\Http\Controllers\RestaurantRatingController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\DealController;
use App\Http\Controllers\CartController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//To sign up
Route::post('signup', [CustomerController::class, 'store']);

//To login
Route::post('login', [CustomerController::class, 'login']);

//To logout
Route::middleware('auth:sanctum')->post('/customer/logout', [CustomerController::class, 'logout']);

Route::middleware(['auth:api'])->group(function () {
    Route::get('restaurants/tag/{tag}', [RestaurantController::class, 'getRestaurantByTag']);
    // ... other routes that require authentication
});

//To add a restaurants
Route::post('/restaurants', [RestaurantController::class, 'store']);

//To reterive all the restaurants
Route::get('/restaurants', [RestaurantController::class, 'index']);

//To add a food category
Route::post('/food-categories', [FoodCategoryController::class, 'store']);

//To add a new listing for restaurant
Route::post('/restaurant-listing-tags', [RestaurantListingTagController::class, 'store']);

//To get all restaurants by tag
Route::get('/restaurants-by-tag', [RestaurantListingTagController::class, 'getRestaurantsByTag']);

//Add a review for a restaurant given by customer
Route::post('/reviews', [RestaurantReviewController::class, 'store']);

//Add a rating for a restaurant given by customer
Route::post('/ratings', [RestaurantRatingController::class, 'store']);

//Add a item for a restaurant
Route::post('/items', [ItemController::class, 'store']);

//Add a deal for a restaurant
Route::post('/deals', [DealController::class, 'store']);

//Add a deal-item entry
Route::post('/deals/{deal}/attach-items', [DealController::class, 'attachItems']);

//Get resturants of in tag
// Route::get('/restaurants/tag/{tag}', [RestaurantController::class, 'getRestaurantByTag']);

//Get Restaurant details
Route::get('/restaurant/{id}/details', [RestaurantController::class, 'getRestaurantDetails']);

//Add to cart
Route::post('cart/add', [CartController::class, 'addToCart'])->name('cart.add');

//Remove item from cart
Route::delete('cart/remove', [CartController::class, 'removeFromCart'])->name('cart.remove');

//Get Cart
Route::get('cart', [CartController::class, 'getCart'])->name('cart.get');