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

Route::group(['domain' => 'kikoe.co.uk'], function()
{
  Route::get('/', 'KikoeController@index');
  Route::get('/alltopheadlines/', 'KikoeController@allTopheadlines');
  Route::get('/category/{cat}', 'KikoeController@category');
  Route::get('/api/getnews/', 'KikoeController@apiCall');
  Route::get('/api/score/{id}', 'KikoeController@score');
  Route::get('/api/sources', 'KikoeController@getSources');
  Route::get('/api/multifeeds','KikoeController@updateMultiFeeds');
  Route::get('/twitback','KikoeController@twitback');
  Route::get('/api/tweetme', 'KikoeController@tweetMe');
  Route::get('/api/youtube', 'KikoeController@getYouTube');
  Route::get('/api/test', 'KikoeController@test');

});
Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
    Route::get('/feeds','KikoeController@adminFeed');
});
