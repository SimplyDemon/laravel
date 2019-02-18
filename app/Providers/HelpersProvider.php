<?php

namespace App\Providers;

use App\Custom\Classes\Helper;
use Illuminate\Support\ServiceProvider;

class HelpersProvider extends ServiceProvider {
	/**
	 * Bootstrap the application services.
	 *
	 * @return void
	 */
	public function boot() {
		require_once( app_path( 'Custom/Classes/Helper.php' ) );
	}

	/**
	 * Register the application services.
	 *
	 * @return void
	 */
	public function register() {
		$this->app->singleton( 'Helper', function ( $app ) {
			return new Helper();
		} );
	}

}
