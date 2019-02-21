<?php

namespace App\Providers;

use App\Custom\Classes\Helper;
use App\Custom\Classes\MainMenu;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
	/**
	 * Bootstrap any application services.
	 *
	 * @return void
	 */
	public function boot( MainMenu $mainMenu ) {
		View::share( 'mainMenu', $mainMenu->generateMenu() );
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
