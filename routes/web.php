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



Route::get('/email', 'FablusController@email')->name('sendEmail');

Route::group(['domain' => 'fablus.co.uk'], function()
{
  Route::get('/', 'FablusController@index');
  Route::get('/kite', 'KiteController@index');
  Route::get('/arraytest','KiteController@orderArray');
});

Route::group(['domain' => 'tintaktoe.co.uk'], function()
{
  Route::get('/', 'TttController@index');

});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
