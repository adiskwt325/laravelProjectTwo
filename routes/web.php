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


// Route::get('/user', 'UserController@index'); 

Route::get('get_user_info', 'GetUserInfo@return_view');

Route::post('save_user_info', 'GetUserInfo@save_user_info'); 

Route::post('delete_user_info', 'GetUserInfo@delete_user_info'); 

Route::get('fetch_user_info', 'GetUserInfoAndAddresses@fetch_user_info'); 


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
