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
    return view('service.wash');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Display All Customers
Route::get('/customers', [CustomerController::class, 'index'])->middleware(['auth'])->name('all-customers');

// Create New Customer
Route::get('/customers/create', [CustomerController::class, 'create'])->middleware('auth')->name('create-customer');
Route::post('/customers/store', [CustomerController::class, 'store'])->middleware('auth')->name('store-customer');

// Update Data Customer
Route::get('/customers/edit/{customer_id}', [CustomerController::class, 'edit'])->middleware('auth')->name('edit-customer');  
Route::patch('/customers/update/{customer_id}', [CustomerController::class, 'update'])->middleware('auth')->name('update-customer');  

// Delete(SoftDelete) Data Customer
Route::delete('/customers/delete/{customer:id}', [CustomerController::class, 'delete'])->middleware('auth')->name('delete-customer');

require __DIR__.'/auth.php';