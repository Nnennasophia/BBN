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


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['verify' => true]);





//visitors routes

Route::get('/', [App\Http\Controllers\VisitorController::class, 'index'])->name('index');
Route::get('/index', [App\Http\Controllers\VisitorController::class, 'index'])->name('myindex');
Route::get('/about', [App\Http\Controllers\VisitorController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\VisitorController::class, 'contact'])->name('contact');
Route::get('/privacy', [App\Http\Controllers\VisitorController::class, 'privacy'])->name('privacy');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
