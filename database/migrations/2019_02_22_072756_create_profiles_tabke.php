<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTabke extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create( 'profiles', function ( Blueprint $table ) {
			$table->increments( 'id' );
			$table->integer( 'user_id' )->unsigned();
			$table->foreign( 'user_id' )
			      ->references( 'id' )
			      ->on( 'laravel_users' )
			      ->onDelete( 'cascade' )
			      ->onUpdate( 'cascade' );
			$table->string( 'name', 20 );
			$table->date( 'birthdate' );
			$table->string( 'phone', 15 )->nullable();

			$table->timestamps();
			$table->softDeletes();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::dropIfExists( 'profiles' );
	}
}
