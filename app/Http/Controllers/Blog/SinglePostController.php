<?php


namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;

class SinglePostController extends Controller   {

	function getView(){
		return view('pages.single-post',['title'=>'Сингл пост']);
	}

}