<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class TestController extends Controller {



	public function time(){
		return time();
	}

	public function about(){
		return view('welcome');
	}
	public function data(){
		$userData = [
			'data' =>[
				'name' => 'Test',
				'surname'=>'Testov'

			]
		];
		return $userData;
	}
	public function put(){
		return 'put here!';
	}

	public function showLoginForm() {
		return view('login');
	}

	public function postingLoginData(Request $request) {
		$login = $request->input('login');
		$password = $request->input('password');

		if($login === '111' && $password === '222') {
			return redirect()->route('mainPage');
		}

		return view('login',['errorMessage'=>'Неверный логин или пароль']);

	}

	public function  page($id = 1) {
		return 'Page with ID:' . $id;
	}

}
