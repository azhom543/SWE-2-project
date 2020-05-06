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
Route::get('/register', function () {
    return view('register');
});
//Route::get('/uploadfile', 'UploadfileController@index');
//Route::post('/uploadfile', 'UploadfileController@upload');
Route::get('/main', 'RegisterController@index');
Route::post('/main/checklogin', 'RegisterController@checklogin');
Route::get('main/successlogin', 'RegisterController@successlogin');
Route::get('main/logout', 'RegisterController@logout');
Route::post('/register_action','RegisterController@store');
Route::get('/homepage', 'RegisterController@homeindex');