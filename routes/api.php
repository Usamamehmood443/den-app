<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::post('signup', [CustomerController::class, 'store']);

Route::post('login', [CustomerController::class, 'login']);

Route::middleware('auth:sanctum')->post('/customer/logout', [CustomerController::class, 'logout']);

