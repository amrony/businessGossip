<?php

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
Route::get('/account','SettingsController@index')->name('my-account');
Route::post('/password/update','SettingsController@updatePassword')->name('password-update');
Route::get('/view/profile','SettingsController@viewProfile')->name('profile-update');
Route::put('/update/profile','SettingsController@updateProfile')->name('update-profile');



Auth::routes();
Route::resource('recharge','MobileRechargeController');
Route::resource('add-fund','AddFundController');

Route::get('/home', 'HomeController@index')->name('home');
