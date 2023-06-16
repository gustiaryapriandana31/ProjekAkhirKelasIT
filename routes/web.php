<?php

use App\Models\Customer;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\TransactionController;

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


// Customers
Route::group(['middleware' => 'auth'], function() {
    Route::get('/customers', [CustomerController::class, 'index'])->name('all-customers');
    Route::get('/customers/create', [CustomerController::class, 'create'])->name('create-customer');
    Route::post('/customers/store', [CustomerController::class, 'store'])->name('store-customer');
    Route::get('/customers/edit/{customer_id}', [CustomerController::class, 'edit'])->name('edit-customer');
    Route::patch('/customers/update/{customer_id}', [CustomerController::class, 'update'])->name('update-customer');
    Route::delete('/customers/delete/{customer:id}', [CustomerController::class, 'delete'])->name('delete-customer');
});

Route::group(['middleware' => 'auth'], function() {
    Route::get('/transactions', [TransactionController::class, 'index'])->name('all-transactions');
    Route::get('/transactions/create/{transaction:id}', [TransactionController::class, 'create'])->name('create-transaction');
    Route::post('/transactions/store', [TransactionController::class, 'store'])->name('store-transaction');
    Route::get('/transactions/edit/{transaction_id}', [TransactionController::class, 'edit'])->name('edit-transaction');
    Route::patch('/transactions/update/{transaction_id}', [TransactionController::class, 'update'])->name('update-transaction');
    Route::delete('/transactions/delete/{transaction:id}', [TransactionController::class, 'delete'])->name('delete-transaction');    
});



// // Display All Customers
// Route::get('/customers', [CustomerController::class, 'index'])->middleware(['auth'])->name('all-customers');

// // Create New Customer
// Route::get('/customers/create', [CustomerController::class, 'create'])->middleware('auth')->name('create-customer');
// Route::post('/customers/store', [CustomerController::class, 'store'])->middleware('auth')->name('store-customer');

// // Update Data Customer
// Route::get('/customers/edit/{customer_id}', [CustomerController::class, 'edit'])->middleware('auth')->name('edit-customer');  
// Route::patch('/customers/update/{customer_id}', [CustomerController::class, 'update'])->middleware('auth')->name('update-customer');  

// // Delete(SoftDelete) Data Customer
// Route::delete('/customers/delete/{customer:id}', [CustomerController::class, 'delete'])->middleware('auth')->name('delete-customer');

require __DIR__.'/auth.php';