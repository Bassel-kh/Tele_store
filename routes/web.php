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


Route::get('/index', 'Main\MainController@index')->name('index');

Route::get('/login', 'MyAuth\LoginController@login')->name('login');
Route::get('/admin', 'Admin\adminController@adminPage')->name('admin.dashboard');
Route::get('/user', 'User\UserController@userPage')->name('user.dashboard');
Route::get('/services', 'PaymentServices\PaymentServicesController@payServicesPage')->name('payment_services');



//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

