<?php


namespace App\Http\Controllers;


use App\Custom\Classes\MyCounter;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller {

	protected $folderPath = 'user.';

	function registerForm( MyCounter $counter ) {
		return view( $this->folderPath . 'register' );
	}

	function registration( RegisterRequest $request ) {


		$input = $request->all();
		debug( $input );

		$result = DB::table( 'users' )->insert(
			[
				'email'    => $request->input( 'email' ),
				'name'     => $request->input( 'name' ),
				'password' => bcrypt( $request->input( 'password' ) ),
				'phone'    => $request->input( 'phone' ),
			]

		);
		debug( $result );

		if ( $result ) {
			return 'Вы удачно зарегистрировались';
		} else {
			return 'Регистрация не успешна';
		}

		return view( $this->folderPath . 'register', [ 'errorMessage' => 'Регистрация пользователя не удалась' ] );
	}

	function loginForm() {
		return view( $this->folderPath . 'login' );
	}

	function authorization( LoginRequest $request ) {

		$user = DB::table( 'users' )->where( 'name', '=', $request->input( 'name' ) )->first();

		if ( ! empty( $user ) && Hash::check( $request->input( 'password' ), $user->password ) ) {
			return 'Привет ' . $request->input( 'name' ) . ' !';
		}

		//проверяем логин-пароль, если не совпадает возвращаем ошибку
		return view( $this->folderPath . 'login', [ 'errorMessage' => 'Логин или пароль неверный' ] );
	}


}