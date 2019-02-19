<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest {

	public function authorize() {
		return true;
	}


	public function rules() {
		return [
			'name'     => 'required|min:3|max:20',
			'password' => 'required|min:6|max:32',

		];
	}
}
