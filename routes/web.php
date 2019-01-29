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


Route::get('/', function () {
    return view('welcome');
})->name('mainPage');
Route::get('/test', function () {
    return 'test MSG';
});
//Route::get('/404', function () {
//	return view('404');
//});

Route::view('/404','404');

Route::get('/test/date','TestController@time');
Route::get('/test/about','TestController@about');
Route::get('/test/user','TestController@data');
Route::put('/test/put','TestController@data');

Route::get('/login', 'TestController@showLoginForm')->name('loginRouteGet');
Route::post('/login', 'TestController@postingLoginData')->name('loginRoutePost');

Route::get('/page/{id?}','TestController@page')
	->name('pageRout');