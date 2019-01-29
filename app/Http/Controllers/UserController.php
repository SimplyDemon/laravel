<?php


namespace App\Http\Controllers;


class UserController extends Controller  {

	protected $folderPath = 'User.';
	function userRegisterForm() {
		return view($this->folderPath .'register');
	}

	function userRegistration() {
		//делаем проверки по полям, записываем пользователя в базу если все ок, если нет - возвращаем ошибку

		return view($this->folderPath .'register',['errorMessage'=>'Регистрация пользователя не удалась']);
	}

	function userLoginForm() {
		return view($this->folderPath .'login');
	}

	function userAuthorization() {
		//проверяем логин-пароль, если не совпадает возвращаем ошибку
		return view($this->folderPath .'login',['errorMessage'=>'Логин или пароль неверны']);
	}


}