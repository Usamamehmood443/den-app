<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\AdminController;

// Route::get('/admin/dashboard', [AdminController::class, 'showDashboard']);
Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('admin.login');
    Route::post('/login/submit', [AdminController::class, 'login'])->name('admin.login.submit');
    Route::get('/dashboard', [AdminController::class, 'showDashboard'])->name('admin.dashboard');
});

Route::get('/restaurant', function () {
    return view('restaurant');
})->name('restaurant');

Route::get('/reports', function () {
    return view('reports');
})->name('reports');

Route::get('/customer-support', function () {
    return view('customer-support');
})->name('customer-support');

Route::get('/add-restaurant', function () {
    return view('add-restaurant');
})->name('add-restaurant');

// Route::get('/admin/login', function () {
//     return view('login');
// })->name('admin.login');
// // Route::post('/admin/login', [AdminController::class, 'login'])->name('login');
// Route::post('/admin/login/submit', [AdminController::class, 'login'])->name('admin.login.submit');

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
