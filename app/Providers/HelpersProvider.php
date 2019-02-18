<?php

namespace App\Providers;

use App\Custom\Classes\MyCounter;
use Illuminate\Support\ServiceProvider;

class HelpersProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
		require_once( app_path( 'Custom/helpers.php' ) );
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->singleton( 'AwesomeCounter', function ( $app ) {
			return new MyCounter();
		} );
	}
}
