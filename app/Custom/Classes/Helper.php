<?php

namespace App\Custom\Classes;

class Helper {

	public function __construct() {
		if ( is_null( $this->randNumber ) ) {
			$this->randNumber = $this->generateSomeNumber();
		}

	}

	protected $randNumber;

	public function generateSomeNumber() {
		return rand( 1, 100 );
	}

	function getRandNumber() {
		return $this->randNumber;
	}

//echo declOfNum(5, array('человек просит', 'человека просят', 'человек просят'));
	function declOfNum( $num, $titles ) {
		$cases = array( 2, 0, 1, 1, 1, 2 );

		return $num . " " . $titles[ ( $num % 100 > 4 && $num % 100 < 20 ) ? 2 : $cases[ min( $num % 10, 5 ) ] ];
	}
}