<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;


class PostController extends Controller  {

	protected $folderPath = 'post.';

	function getAll () {
		return view($this->folderPath .'all');
	}

	function getSingle($id) {
		return view($this->folderPath .'single' ,['postID' => $id]);
	}

	function addNew () {
		//получаем поля через $request->input, делаем проверки, пытаемся записать в базу, если ошибка - выводим ее

		return view($this->folderPath .'new',['errorMessage'=>'Не все поля были заполнены корректно']);
	}
	function showAddForm () {
		return view($this->folderPath .'new');
	}

}