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
  Route::get('/alltopheadlines', 'KikoeController@allTopheadlines');
  Route::get('/category/{cat}', 'KikoeController@category');
  Route::get('/article/{slug}', 'KikoeController@article');
  Route::get('/twitback','KikoeController@twitback');
  Route::get('/results', 'KikoeController@results');
  Route::get('/login','AuthorController@authorlogin');

  Route::get('/author/twitter', 'SocialAuthController@twitterLogin');
  Route::get('/author/facebook', 'SocialAuthController@facebookLogin');
  Route::get('/author/github', 'SocialAuthController@githubLogin');
  Route::get('/redirect', 'SocialAuthController@redirect');
  Route::get('/callback', 'SocialAuthController@callback');
  Route::get('logout','KikoeController@logout');

  Route::get('/register','AuthorController@index');
  Route::get('/api/allnews', 'KikoeApiController@allNews');
  Route::get('/api/searchterm/{searchterm}', 'KikoeController@apisearch');
  Route::get('/api/allcategories', 'KikoeApiController@allCategories');
  Route::get('/api/articlecategories/{category}', 'KikoeApiController@articleCategories');
  Route::get('/api/allarticlecategories', 'KikoeApiController@allArticleCategories');
  Route::get('/api/article/{id}','KikoeApiController@article');
  Route::get('/api/tweetme', 'KikoeController@tweetMe');
  Route::get('/api/youtube', 'KikoeController@getYouTube');
  Route::get('/api/test', 'KikoeController@test');
  Route::get('/api/subscribe', 'KikoeListController@subscribe');
  Route::get('/api/getnews/', 'KikoeController@apiCall');
  Route::get('/api/score/{id}', 'KikoeController@score');
  Route::get('/api/sources', 'KikoeController@getSources');
  Route::get('/api/multifeeds','KikoeController@updateMultiFeeds');
  Route::get('/api/tweets/{term}', 'KikoeTwitterController@searchTerm');
  Route::get('/public/api/subscribe', 'KikoeListController@subscribe');
  Route::post('/api/articleupdate','KikoeController@updateArticle')->name('updateArticle');

});
Route::group(['prefix' => 'administrator'], function () {
    Voyager::routes();
    Route::get('/feeds','KikoeController@adminFeed');
    Route::get('/newsmanager', 'NewsController@index');
});
