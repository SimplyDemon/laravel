<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DeleteNameFieldLaravelUsersTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table( 'laravel_users', function ( Blueprint $table ) {
			$table->dropColumn( 'name' );
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table( 'laravel_users', function ( Blueprint $table ) {
			$table->string( 'name' );
		} );
	}
}
