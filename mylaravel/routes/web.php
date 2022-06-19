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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'App\Http\Controllers\MainController@home');

// Route::get('/about', function () {
//     return view('about');
// });

Route::get('/about', 'App\Http\Controllers\MainController@about');

Route::get('/review', 'App\Http\Controllers\MainController@review')->name('review');

Route::post('/review/check', 'App\Http\Controllers\MainController@review_check');

// Route::get('/user/{id}/{name}', function ($id, $name) {
//     return 'id:' . $id . ' name:' . $name;
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/portfolio', 'App\Http\Controllers\MainController@portfolio')->name('portfolio');

Route::post('/portfolio/check', 'App\Http\Controllers\MainController@portfolio_check');