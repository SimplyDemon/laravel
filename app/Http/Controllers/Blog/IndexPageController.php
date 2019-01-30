<?php


namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;

class IndexPageController  extends Controller  {

	function getView(){
		return view('pages.index',['title'=>'Главная страница']);
	}

}