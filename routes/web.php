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

Route::get('/', 'SiteController@index')->name('home');

//Auth::routes();

Route::middleware('auth')->prefix('admin')->namespace('Admin')->name('admin.')->group(function() {
    Route::get('/', 'AdminController@index')->name('index');

    Route::prefix('balance')->name('balance.')->group(function() {
        Route::get('/', 'BalanceController@index')->name('index');
        Route::get('deposit', 'BalanceController@deposit')->name('deposit');
        Route::post('deposit', 'BalanceController@depositStore')->name('deposit');
        Route::get('withdraw', 'BalanceController@withdraw')->name('withdraw');
        Route::get('transfer', 'BalanceController@transfer')->name('transfer');
        Route::post('transfer', 'BalanceController@transfer')->name('transfer');
    });
    
    Route::get('historic', 'HistoricController@index')->name('historic.index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
