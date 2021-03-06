<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddNumberToCustomerTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::table( 'customer', function ( Blueprint $table ) {
			$table->tinyInteger( 'number' )->default( 0 );
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::table( 'customer', function ( Blueprint $table ) {
			$table->dropColumn( 'number' );
		} );
	}
}
