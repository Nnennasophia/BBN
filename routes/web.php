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

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', function () {
    return view('welcome');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes(['verify' => true]);









//new user dashboard routes

Route::get('/dash_index', [App\Http\Controllers\UserdashController::class, 'dash_index'])->name('dash_index');





//visitors routes

Route::get('/', [App\Http\Controllers\VisitorController::class, 'index'])->name('index');
Route::get('/index', [App\Http\Controllers\VisitorController::class, 'index'])->name('myindex');
Route::get('/about', [App\Http\Controllers\VisitorController::class, 'about'])->name('about');
Route::get('/contact', [App\Http\Controllers\VisitorController::class, 'contact'])->name('contact');
Route::get('/privacy', [App\Http\Controllers\VisitorController::class, 'privacy'])->name('privacy');


