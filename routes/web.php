<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test-db-connection', function () {
    try {
        DB::connection()->getPdo();
        return response()->json(['message' => 'Successfully connected to the database.'], 200);
    } catch (\Exception $e) {
        return response()->json(['message' => 'Failed to connect to the database: ' . $e->getMessage()], 500);
    }
});
