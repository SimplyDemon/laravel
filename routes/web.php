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


//Route::get('/', function () {
//    return view('welcome');
//})->name('mainPage');

Route::get( '/testing', 'TestController@testing' );


Route::get( '/', 'Blog\IndexPageController@getView' )->name('index');
Route::get( '/about', 'Blog\AboutPageController@getView' )->name('about');
Route::get( '/contacts', 'Blog\ContactsPageController@getView' )->name('contacts');
Route::get( '/elements', 'Blog\ElementsPageController@getView' )->name('elements');
Route::get( '/single-post{id?}', 'Blog\SinglePostController@getView' )->name('single-post');


Route::view( '/404', '404' );
Route::group( [ 'prefix' => 'post' ], function () {
	Route::get( 'all', 'PostController@postGetAll' );
	Route::get( '{id}', 'PostController@postGetSingle' );
	Route::get( 'new', 'PostController@postShowAddForm' );
	Route::post( 'new', 'PostController@postAddNew' );
} );
Route::group( [ 'prefix' => 'user' ], function () {
	Route::get( 'register', 'UserController@userRegisterForm' );
	Route::post( 'register', 'UserController@userRegistration' );
	Route::get( 'login', 'UserController@userLoginForm' );
	Route::post( 'login', 'UserController@userAuthorization' );
} );