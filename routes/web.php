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

Route::get('/', function () {
    return view('pages.welcome');
});

Route::name('provider.google')->get('/login/google')->uses('Auth\LoginController@redirectToGoogle');
Route::name('provider.google.callback')->get('login/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::name('provider.facebook')->get('/login/facebook')->uses('Auth\LoginController@redirectToFacebook');
Route::name('provider.facebook.callback')->get('login/facebook/callback', 'Auth\LoginController@handleFacebookCallback');
Auth::routes();

Route::get('/home', 'HomeController@index');
