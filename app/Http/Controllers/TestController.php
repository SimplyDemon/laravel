<?php

namespace App\Http\Controllers;

use App\Custom\Classes\MainMenu;
use App\Models\Customer;
use App\Models\Post;
use App\Models\Profile;
use App\Models\User;
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
				'name'    => 'Test',
				'surname' =>'Testov'

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
		$login    = $request->input('login');
		$password = $request->input('password');

		if( $login === '111' && $password === '222') {
			return redirect()->route('mainPage');
		}

		return view('login',[ 'errorMessage' =>'Неверный логин или пароль']);

	}

	public function  page($id = 1) {
		return 'Page with ID:' . $id;
	}

	public function testing(){
		return view('layouts.main');
	}

	public function testMenu() {
		$menu = new MainMenu();

		return $menu->generateMenu();


	}

	public function orm() {

//		$customer = new Customer();
//		$customer->name = 'Test';
//		$customer->surname = 'Testov';
//		$customer->patronymic = 'Testovich';
//		$customer->age = 45;
//		$customer->birthdate = '1984-06-23';
//		$customer->notes = 'Test note text';
//		$customer->save();
//
//		$customer = Customer::find(1);
//		debug($customer);
//		var_dump($customer);
//		$customer->age = 20;
//		$customer->notes = 'We edited it ';
//		$customer->save();
//
//
//		$create = Customer::create([
//			'name'=>'Test2',
//			'surname'=>'Testov2',
//			'age' => '30',
//			'birthdate' => '1990-01-30',
//			'notes'=> 'some Note'
//		]);
//		debug($create);
		return 'ok';
	}

	public function relations() {
//		$userModel = User::find(1);
		//debug($userMode);
		//var_dump($userMode);
//		$userProfile = $userModel->profile;
//		dump($userModel, $userProfile);

//		$user = Profile::where('name','Test')
//			->first()
//			->user;

//		$post = new Post([
//			'title' => 'Post4',
//			'slug' => 'post4',
//			'tagline' => 'some random'
//		]);
//
//		$user = User::find(1);
//		$user->posts()->save($post);

		return 'ok';

	}



}
