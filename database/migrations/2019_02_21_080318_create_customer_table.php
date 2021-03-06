<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'customer', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->string( 'name' );
			$table->string( 'surname' );
			$table->string( 'patronymic' )->nullable();
			$table->date( 'birthdate' );
			$table->integer( 'age' );
			$table->text( 'notes' );
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'customer' );
	}
}
