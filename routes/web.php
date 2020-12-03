<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rest', [\App\Http\Controllers\VaancyController::class, 'index'])->name('home');
Route::get('show/{id}', [\App\Http\Controllers\VaancyController::class, 'show'])->name('home');
