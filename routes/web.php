<?php

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


    Route::prefix('/admin')->middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
       //dashbaord
        Route::get('dashboard', function () {
            return view('adminPanel/dashboard');
        })->name('dashboard');

    });

    Route::get('/', function () {
        return view('userPanel/dashboard');
    });