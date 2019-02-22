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

Route::group( [ 'prefix' => '/', 'namespace' => 'Blog' ], function () {
	Route::get( '/', 'IndexPageController@getView' )->name( 'index' );
	Route::get( '/about', 'AboutPageController@getView' )->name( 'about' );
	Route::get( '/contacts', 'ContactsPageController@getView' )->name( 'contacts' );
	Route::get( '/elements', 'ElementsPageController@getView' )->name( 'elements' );
	Route::get( '/single-post{id?}', 'SinglePostController@getView' )->name( 'single-post' );
} );


Route::group( [ 'prefix' => 'user' ], function () {
	Route::get( 'register', 'UserController@registerForm' )->name( 'getRegister' );
	Route::post( 'register', 'UserController@registration' )->name( 'postRegister' );
	Route::get( 'login', 'UserController@loginForm' )->name( 'getLogin' );
	Route::post( 'login', 'UserController@authorization' )->name( 'postLogin' );
} );

Route::view( '/404', '404' )->name( '404' );

Route::get( '/test/menu', 'TestController@testMenu' )->name( 'testMenu' );
Route::get( '/orm', 'TestController@orm' )->name( 'orm' );



