<?php


use App\Http\Controllers;

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

Route::get('home', 'PostsController@index')->middleware('auth');

Route::get('about', 'PostsController@about')->middleware('auth');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('index', 'HomeController@index')->name('home')->middleware('auth');

Route::get('shopping','ShoppingController@index')->middleware('auth');

Route::get('shopping_made','ShoppingController@shoppingMade')->middleware('auth');

Route::get('routes', 'RoutesController@index')->middleware('auth');

Route::get('routes_made','RoutesController@routesMade')->middleware('auth');

Route::post('shop','ShoppingController@saveShopping')->middleware('auth');

Route::post('route','RoutesController@saveRoute')->middleware('auth');

Route::post('search','SearchController@yearly')->middleware('auth');

Route::post('savePayslip','PayslipsController@store')->middleware('auth');

Route::get('payslip','PayslipsController@index')->middleware('auth');

Route::get('profile','ProfileController@create')->middleware('auth');

Route::get('profile/show','ProfileController@show')->middleware('auth');

Route::post('send/profile','ProfileController@store')->middleware('auth');
