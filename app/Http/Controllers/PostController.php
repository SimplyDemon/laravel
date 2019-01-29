<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PostController extends Controller  {

	protected $folderPath = 'Post.';

	function postGetAll () {
		return view($this->folderPath .'all');
	}

	function postGetSingle($id) {
		return view($this->folderPath .'single' ,['postID' => $id]);
	}

	function postAddNew () {
		//получаем поля через $request->input, делаем проверки, пытаемся записать в базу, если ошибка - выводим ее

		return view($this->folderPath .'new',['errorMessage'=>'Не все поля были заполнены корректно']);
	}
	function postShowAddForm () {
		return view($this->folderPath .'new');
	}

}