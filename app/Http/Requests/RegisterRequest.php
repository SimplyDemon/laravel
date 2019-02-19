<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest {

	public function authorize() {
		return true;
	}


	public function rules() {
		return [
			'name'                  => 'required|min:3|max:20',
			'email'                 => 'required|email',
			'password'              => 'required|min:6|max:32',
			'password_confirmation' => 'required|same:password',
			'phone'                 => 'regex:/^\+7\([0-9]{3}\)[0-9]{3}-[0-9]{2}-[0-9]{2}$/i'

		];
	}
}
