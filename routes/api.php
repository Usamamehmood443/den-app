<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\RestaurantController;
use App\Http\Controllers\FoodCategoryController;
use App\Http\Controllers\RestaurantListingTagController;
use App\Http\Controllers\RestaurantReviewController;

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