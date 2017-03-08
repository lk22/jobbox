<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

/**
 * users api
 */
Route::prefix('users')->group(function() {

	Route::name('api.users.all')->get('/')->uses('UserController@all');

	Route::name('api.users.latest')->get('/latest')->uses('UserController@latest');

	Route::name('api.users.orderby')->get('/orderby')->uses('UserController@orderBy');

	Route::prefix('user')->group(function() {

		Route::name('api.user')->get('/')->uses('UserController@user');

		Route::name('api.user.auth')->get('/auth')->uses('UserController@auth');

	});

	/**
	 * create new user
	 */
	Route::name('api.create.new.user')->post('/')->uses('UserController@create');

	/**
	 * update current user
	 */
	Route::name('api.update.existing.user')->put('/{id}')->uses('UserController@update');

	/**
	 * delete existing user
	 */
	Route::name('api.remove.user')->delete('/{id}')->uses('UserController@remove');

});	
