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

/*Route::get('/register2',function (){
    return view('register');
});;

Route::get('/login',function (){
    return view('login');
});;*/

Route::get('/home','MainController@home');
Route::get('/','MainController@home');
Route::get('/aboutme','MainController@me');

Route::resource('/categories','CategoryController');
Route::resource('/post','PostController');

Auth::routes();

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
