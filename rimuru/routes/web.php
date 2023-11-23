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

Route::get('/', 'App\Http\Controllers\PagesController@welcome' )->name('home');
Route::get('/leo', 'App\Http\Controllers\PagesController@leo' );
Route::get('/kleopatra', 'App\Http\Controllers\PagesController@kleopatra' )->name('kleo');
Route::get('/napoleon', 'App\Http\Controllers\PagesController@napoleon' )->name('nap');



// auth routes
Route::get('/login', 'App\Http\Controllers\AuthController@showLoginForm' )->name('login');
Route::post('/login_process', 'App\Http\Controllers\AuthController@login' )->name('login_process');

Route::get('/logout', 'App\Http\Controllers\AuthController@logout' )->name('logout');

Route::get('/register', 'App\Http\Controllers\AuthController@showRegisterForm' )->name('register');
Route::post('/register_process', 'App\Http\Controllers\AuthController@register' )->name('register_process');

//posts
Route::resource('posts',\App\Http\Controllers\PostController::class);
