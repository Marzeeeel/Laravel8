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

// Route::redirect('/', 'home');

Route::view('/', 'home')->name('home');
Route::view('/ingfo', 'information')->name('information');
Route::view('/kontak', 'contact')->name('contact');
Route::view('/about', 'aboutme')->name('aboutme');
Route::view('/menu', 'menu')->name('menu');
Route::view('/settings', 'settings')->name('settings');

// Route::get('/index', function(){
//     return view('user.index');
// });
