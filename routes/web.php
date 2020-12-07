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

Route::get('/news', function () {
    return view('newses');
})->name('news');

Route::get('/index', [\App\Http\Controllers\VaancyController::class, 'index'])->name('home');
Route::get('show/{id}', [\App\Http\Controllers\VaancyController::class, 'show'])->name('show');
Route::get('/show/{id}/edit', [\App\Http\Controllers\VaancyController::class, 'edit'])->name('edit');
Route::get('/show/{id}/update', [\App\Http\Controllers\VaancyController::class, 'update'])->name('update');
Route::post('/contact/submit', [\App\Http\Controllers\VaancyController::class, 'store'])->name('contact-form');
Route::get('/show/{id}/delete', [\App\Http\Controllers\VaancyController::class, 'destroy'])->name('destroy');


Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])->name('news-home');
Route::get('news/{id}', [\App\Http\Controllers\NewsController::class, 'show'])->name('news-show');
Route::get('news/submit', [\App\Http\Controllers\NewsController::class, 'store'])->name('news-form');
Route::get('/news/{id}/edit', [\App\Http\Controllers\NewsController::class, 'edit'])->name('edit-news');
Route::post('news/{id}/update', [\App\Http\Controllers\NewsController::class, 'update'])->name('update-news');
Route::delete('news/{id}/delete', [\App\Http\Controllers\NewsController::class, 'delete'])->name('destroy-news');
