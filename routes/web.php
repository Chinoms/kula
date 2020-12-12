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

// Route::get('/', function () {
// 	return view('homepage');
// });

Route::get('/', 'App\Http\Controllers\PostController@showHome');

Route::get('our-history', function () {
	return view('our-history');
});

Route::get('autonomous-communities', function () {
	return view('autonomous-communities');
});



Route::get('food-fruits', function () {
	return view('food-fruits');
});


Route::get('communities-settlements', function () {
	return view('communities-settlements');
});


Route::get('wrestling', function () {
	return view('wrestling');
});


Route::get('masquerades', function () {
	return view('masquerades');
});


Route::get('kkga', function () {
	return view('kkga');
});


Route::get('nukks', function () {
	return view('nukks');
});


Route::get('kyo', function () {
	return view('kyo');
});


Route::get('agegrades', function () {
	return view('agegrades');
});


Route::get('contact', function () {
	return view('contact');
});


Route::get('bpl', function () {
	return view('bpl');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home')->middleware('auth');

Route::get('blog/{slug}', 'App\Http\Controllers\PostController@readArticle');

Route::group(['middleware' => 'auth'], function () {
	Route::get('table-list', function () {
		return view('pages.table_list');
	})->name('table');

	Route::get('typography', function () {
		return view('pages.typography');
	})->name('typography');

	Route::get('icons', function () {
		return view('pages.icons');
	})->name('icons');

	Route::get('map', function () {
		return view('pages.map');
	})->name('map');

	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');

	Route::get('rtl-support', function () {
		return view('pages.language');
	})->name('language');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');
	
});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);

	Route::get('new-article', 'App\Http\Controllers\PostController@create');
	Route::post('savearticle', 'App\Http\Controllers\PostController@store');
	Route::get('list-articles', 'App\Http\Controllers\PostController@listArticles');
	Route::get('edit/{id}', 'App\Http\Controllers\PostController@show');
	Route::post('update-post', 'App\Http\Controllers\PostController@update');
	

	
	//Route::get('homepage', 'App\Http\Controllers\PostController@home');
});
