<?php


namespace App\Http\Controllers;


use App\Custom\Classes\MyCounter;
use App\Http\Requests\RegisterRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller  {

	protected $folderPath = 'user.';

	function registerForm( MyCounter $counter ) {
		return view( $this->folderPath . 'register' );
	}

	function registration( RegisterRequest $request ) {


		$input = $request->all();
		debug( $input );

		$result = DB::table( 'users' )->insert(
			[
				'login'    => $request->input( 'email' ),
				'name'     => $request->input( 'name' ),
				'password' => $request->input( 'password' ),
			]

		);
		debug( $result );

		if ( $result ) {

			return 'Sucess registred';
		} else {
			return 'Все плохо!';
		}

		return view( $this->folderPath . 'register',[ 'errorMessage' =>'Регистрация пользователя не удалась']);
	}

	function loginForm() {
		return view( $this->folderPath . 'login');
	}

	function authorization() {
		//проверяем логин-пароль, если не совпадает возвращаем ошибку
		return view( $this->folderPath . 'login',[ 'errorMessage' =>'Логин или пароль неверны']);
	}


}