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


Route::get('/', [
    'uses' => 'App\Http\Controllers\Controller@getHome',
    'as' => 'home'
]);

Route::get('/about', [
    'uses' => 'App\Http\Controllers\Controller@getAbout',
    'as' => 'about'
]);

// ------------------------- User

Route::get('/sign-in', [
    'uses' => 'App\Http\Controllers\UserController@getSignIn',
    'as' => 'sign-in'
]);

Route::post('/sign-in', [
    'uses' => 'App\Http\Controllers\UserController@postSignIn',
    'as' => 'sign-in'
]);

Route::get('/sign-up', [
    'uses' => 'App\Http\Controllers\UserController@getSignUp',
    'as' => 'sign-up'
]);

Route::post('/sign-up', [
    'uses' => 'App\Http\Controllers\UserController@postSignUp',
    'as' => 'sign-up'
]);

Route::post('/sign-out', [
    'uses' => 'App\Http\Controllers\UserController@postSignOut',
    'as' => 'sign-out'
]);
// for future user things, i.e. profile or pets list
//Route::group(['prefix' => 'user'], function () {
//});

// ------------------------- End User


// ------------------------- Store

Route::get('/store/featured', [
    'uses' => 'App\Http\Controllers\StoreController@getStoreFeatured',
    'as' => 'featured'
]);

Route::get('/store/foods', [
    'uses' => 'App\Http\Controllers\StoreController@getStoreFoods',
    'as' => 'foods'
]);

Route::get('/store/eggs', [
    'uses' => 'App\Http\Controllers\StoreController@getStoreEggs',
    'as' => 'eggs'
]);
Route::get('/eggs','StoreController@getEggs');

Route::get('/store/potions', [
    'uses' => 'App\Http\Controllers\StoreController@getStorePotions',
    'as' => 'potions'
]);

// ------------------------- End Store
