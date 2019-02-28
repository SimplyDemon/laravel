<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddPost extends FormRequest {

	public function authorize() {
		return true;
	}


	public function rules() {
		return [
			'title'    => 'required|min:3|max:100',
			'announce' => 'required|min:10|max:250',
			'content'  => 'required|min:10',
			'img'      => 'required|url',

		];
	}
}
