<?php

use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\Front\ListingController;
use App\Http\Controllers\Front\PropertyController;
use App\Http\Controllers\Front\SearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index'])->name('homepage');
Route::get('/search', [SearchController::class, 'search'])->name('search-properties');
Route::get('/property/{property:slug}', [PropertyController::class, 'index'])->name('property');
Route::get('/listing/{type:slug?}', [ListingController::class, 'index'])->name('listing-by-type');
Route::get('/location/{location:slug?}', [ListingController::class, 'index'])->name('listing-by-location');
