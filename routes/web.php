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

use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
use Illuminate\Support\Facades\Route;

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath','localize' ]
    ], function()
{
    Route::get(LaravelLocalization::transRoute('routes.home'), 'Back\Dashboard\dashboardController@index')->name('home');
    Route::get(LaravelLocalization::transRoute('routes.chat'), 'Back\Dashboard\dashboardController@chat')->name('chat');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
