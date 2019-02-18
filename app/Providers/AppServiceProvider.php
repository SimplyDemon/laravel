<?php

namespace App\Providers;

use App\Custom\Classes\Helper;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot() {
		//
	}

	/**
	 * Register any application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->singleton( 'singletonHelper', function ( $app ) {
			return new Helper();
		} );

		$this->app->bind( 'bindHelper', function ( $app ) {
			return new Helper();
		} );


	}
}
