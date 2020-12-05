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

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/index', [\App\Http\Controllers\VaancyController::class, 'index'])->name('home');
Route::get('show/{id}', [\App\Http\Controllers\VaancyController::class, 'show'])->name('show');
Route::get('/show/{id}/edit', [\App\Http\Controllers\VaancyController::class, 'edit'])->name('edit');
Route::get('/show/{id}/update', [\App\Http\Controllers\VaancyController::class, 'update'])->name('update');
Route::post('/contact/submit', [\App\Http\Controllers\VaancyController::class, 'store'])->name('contact-form');
Route::get('/show/{id}/delete', [\App\Http\Controllers\VaancyController::class, 'destroy'])->name('destroy');
