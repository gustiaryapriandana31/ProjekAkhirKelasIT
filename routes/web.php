<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Models\Customer;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Display All Customers
Route::get('/customers', CustomerController::class, 'index')->name('create-customer');

// Create New Customer
// Route::get('create-customer', CustomerFactory::class, 'index')->name('create-customer');
// Route::post('-customer', CustomerFactory::class, 'index')->name('create-customer');

require __DIR__.'/auth.php';