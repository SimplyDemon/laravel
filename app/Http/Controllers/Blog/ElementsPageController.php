<?php


namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;

class ElementsPageController extends Controller   {
	function getView(){
		return view('pages.elements',['title'=>'Элементы']);
	}

}