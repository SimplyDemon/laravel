<?php


namespace App\Http\Controllers\Blog;
use App\Http\Controllers\Controller;

class AboutPageController extends Controller   {
	function getView(){
		return view('pages.about',['title'=>'Обо мне']);
	}
}