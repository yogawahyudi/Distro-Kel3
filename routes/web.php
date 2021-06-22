<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\TransactionDetailController;
use App\Models\TransactionsDetail;
use Illuminate\Support\Facades\Route;

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



Route::get('/', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::resource('product', ProductController::class)->middleware('auth');
Route::resource('transactions', TransactionDetailController::class)->middleware('auth');
Route::resource('transaction', TransactionController::class)->middleware('auth');
require __DIR__.'/auth.php';
