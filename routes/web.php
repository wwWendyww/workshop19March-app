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
//Route::get('/dashboard', function(){ })
Route::get('/workshop19March', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    ///Route::get('/dashboard', function () 
    Route::get('/workshop19March', function () {
       // return "view('dashboard');"
       return "Web Development using Laravel on 19 March 2023";
    })->name('dashboard');
});
