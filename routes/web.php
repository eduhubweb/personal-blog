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

Route::get('/','HomeController@index')->name('home');
Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::get('login','AdminLoginController@adminLoginForm')->name('admin.loginForm');
Route::post('login','AdminLoginController@adminLogin')->name('admin.login');
Route::middleware('auth')->group(function (){
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('profile','ProfileController@profile')->name('user.profile');
    Route::resource('category','CategoryController');
    Route::resource('author','AuthorController');
    Route::resource('post','PostController');
});

Route::get('emergency-logout',function (){
    auth()->logout();
    Session::forget('user');
    return redirect()->route('admin.loginForm');
});
