<?php


namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;

class AboutPageController extends Controller {
	function getView() {

		//В контенте видим, что у синглтона все значение одни, а у бинда, все разные
		$content         = null;
		$singletonHelper = resolve( 'singletonHelper' );
		$content         .= "\n\r Singleton number is " . $singletonHelper->getRandNumber();
		$singletonHelper = resolve( 'singletonHelper' );
		$content         .= "\n\r <b>Singleton</b> number is" . $singletonHelper->getRandNumber();
		$singletonHelper = resolve( 'singletonHelper' );
		$content         .= "\n\r Singleton number is " . $singletonHelper->getRandNumber();


		$bindHelper = resolve( 'bindHelper' );
		$content    .= "\n\r Bind number is " . $bindHelper->getRandNumber();
		$bindHelper = resolve( 'bindHelper' );
		$content    .= "\n\r Bind number is " . $bindHelper->getRandNumber();
		$bindHelper = resolve( 'bindHelper' );
		$content    .= "\n\r Bind number is " . $bindHelper->getRandNumber();


		$helper = resolve( 'Helper' );
		$title  = $helper->declOfNum( $helper->getRandNumber(), array(
			'человек просит',
			'человека просят',
			'человек просят'
		) );

		return view( 'pages.about', [ 'title' => $title, 'content' => $content ] );
	}
}