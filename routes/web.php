<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\DomainController;

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
    return view('home');
});

Route::get('/register', [DomainController::class, 'create'])->name('register');

Route::post('/store', [DomainController::class, 'store'])->name('store');
// Route::get('/register', '\App\Http\Controllers\DomainController@register');
