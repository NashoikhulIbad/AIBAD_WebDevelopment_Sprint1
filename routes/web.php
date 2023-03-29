<?php

use App\Http\Controllers\SearchController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuoteController;

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

// Search
Route::get('/',[SearchController::class, 'index'])->name('quotes');

//Quote
Route::post('/quote', [QuoteController::class, 'postQuote'])->name('post-quote');
Route::get('/quotes', [QuoteController::class, 'getQuotes'])->name('get-quotes');
Route::put('/quote/{id}', [QuoteController::class, 'updateQuote'])->name('update-quote');
Route::delete('/quote/delete/{id}', [QuoteController::class, 'deleteQuote'])->name('delete-quote');