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
Route::get('/', 'WelcomeController@index');
Route::get('/home', 'WelcomeController@index');

// Ideas
Route::resource('/ideas', 'IdeasController', ['only' => ['index', 'show']]);

// Account
Route::get('/account', 'AccountController@index');
Route::get('/account/profile', 'AccountController@profile');
Route::get('/account/ideas', 'AccountController@ideas');
Route::get('/account/ideas/process', 'AccountController@ideas_process');
Route::post('/account/ideas/process/save', 'AccountController@ideas_create');
Route::get('/account/supporters', 'AccountController@supporters');
Route::get('/account/settings', 'AccountController@settings');

Route::resource('pages', 'PagesController', ['only' => ['index', 'show']]);
Route::model('pages', 'Page');
Route::bind('pages', function($value, $route) {
	return App\Page::whereSlug($value)->first();
});

Route::resource('posts', 'PostsController', ['only' => ['index', 'show']]);
Route::model('posts', 'Post');
//Route::model('comments', 'Comment');
Route::bind('posts', function($value, $route) {
	return App\Post::whereSlug($value)->first();
});

Route::get('filemanager/file/{filename}', ['as' => 'getentry', 'uses' => 'FileManagerController@get']);

// Superadmin
Route::group(['middleware' => 'superadmin'], function()
{
    Route::get('/superadmin', 'Superadmin\DashboardController@dashboard');
    Route::get('/superadmin/dashboard', 'Superadmin\DashboardController@dashboard');

	// Users
    Route::get('/superadmin/users', 'Superadmin\UsersController@index');

    // Pages
	Route::model('pages', 'Page');
	Route::bind('pages', function($value, $route) {
		return App\Page::whereSlug($value)->first();
	});
	Route::resource('superadmin/pages', 'Superadmin\PagesController');
	Route::get('superadmin/pages', 'Superadmin\PagesController@index');

	// Posts
	Route::model('posts', 'Post');
	Route::bind('posts', function($value, $route) {
		return App\Post::whereSlug($value)->first();
	});
	Route::resource('superadmin/posts', 'Superadmin\PostsController');
	Route::get('superadmin/posts', 'Superadmin\PostsController@index');

	// Sidebars
	Route::model('sidebars', 'Sidebar');
	Route::bind('sidebars', function($value, $route) {
		return App\Sidebar::whereId($value)->first();
	});
	Route::resource('superadmin/sidebars', 'Superadmin\SidebarsController');
	Route::get('superadmin/sidebars', 'Superadmin\SidebarsController@index');


	// Filemanager
	Route::resource('superadmin/filemanager', 'Superadmin\FileManagerController', ['only' => ['destroy']]);
	Route::get('superadmin/filemanager/file/{filename}', ['as' => 'getentry', 'uses' => 'FileManagerController@get']);
	Route::get('superadmin/filemanager', 'Superadmin\FileManagerController@index');
	Route::get('superadmin/filemanager/index', 'Superadmin\FileManagerController@index');
	Route::post('superadmin/filemanager/add',['as' => 'addentry', 'uses' => 'Superadmin\FileManagerController@add']);
	//Route::get('superadmin/filemanager/destroy', 'Superadmin\FileManagerController@destroy');

	// Settings
	Route::get('superadmin/settings/global', 'Superadmin\SettingsController@settingsGlobal');
	Route::get('superadmin/settings/maintenance', 'Superadmin\SettingsController@settingsMaintenance');
	Route::get('superadmin/settings/server', 'Superadmin\SettingsController@settingsServer');
});

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

// Jousty API
Route::group(['prefix' => 'jousty_api'], function()
{
    Route::get('users', 'JoustyApiController@users');
});
