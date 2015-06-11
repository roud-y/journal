<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
get('/', 'JournalController@index');
patch('/restore/{slug}', ['as' => 'article.restore', 'uses' => 'JournalController@restore']);
get('/deleted', ['as' => 'article.deleted', 'uses' => 'JournalController@deleted']);
resource('/article', 'ArticleController');

/*Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);*/
//whatsmakeyouhappy


