<?php

use App\Http\Controllers\Admin\AgentController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\PropertyController;
use App\Http\Controllers\Admin\TypeController;
use Illuminate\Support\Facades\Route;

Route::name('auth.')->group(function () {
    Route::controller(LoginController::class)->group(function () {
        Route::get('/login', 'showLoginForm')
            ->name('show-login-form')
            ->middleware('guest:admin');

        Route::post('/login', 'login')->name('login');
    });
});

Route::middleware('auth:admin')->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::controller(TypeController::class)
       ->prefix('type')
       ->name('type.')
       ->group(function () {
           Route::get('/', 'index')->name('index');
           Route::get('/create', 'create')->name('create');
           Route::post('/store', 'store')->name('store');
           Route::get('/edit/{type:slug}', 'edit')->name('edit');
           Route::post('/update/{type:slug}', 'update')->name('update');
           Route::get('/delete/{type:slug}', 'destroy')->name('delete');
       });

    Route::controller(LocationController::class)
        ->prefix('location')
        ->name('location.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{location:slug}', 'edit')->name('edit');
            Route::post('/update/{location:slug}', 'update')->name('update');
            Route::get('/delete/{location:slug}', 'destroy')->name('delete');
        });

    Route::controller(AgentController::class)
        ->prefix('agent')
        ->name('agent.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{agent:slug}', 'edit')->name('edit');
            Route::post('/update/{agent:slug}', 'update')->name('update');
            Route::get('/delete/{agent:slug}', 'destroy')->name('delete');
        });

    Route::controller(PropertyController::class)
        ->prefix('property')
        ->name('property.')
        ->group(function () {
            Route::get('/', 'index')->name('index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');
            Route::get('/edit/{property:slug}', 'edit')->name('edit');
            Route::post('/update/{property:slug}', 'update')->name('update');
            Route::get('/delete/{property:slug}', 'destroy')->name('delete');
        });
});
