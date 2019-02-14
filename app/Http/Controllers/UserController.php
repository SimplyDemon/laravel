<?php


namespace App\Http\Controllers;


class UserController extends Controller  {

	protected $folderPath = 'user.';
	function registerForm() {
		return view($this->folderPath .'register');
	}

	function registration() {
		//делаем проверки по полям, записываем пользователя в базу если все ок, если нет - возвращаем ошибку

		return view($this->folderPath .'register',['errorMessage'=>'Регистрация пользователя не удалась']);
	}

	function loginForm() {
		return view($this->folderPath .'login');
	}

	function authorization() {
		//проверяем логин-пароль, если не совпадает возвращаем ошибку
		return view($this->folderPath .'login',['errorMessage'=>'Логин или пароль неверны']);
	}


}