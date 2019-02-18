<?php


namespace App\Custom\Classes;


class MyCounter {

	protected $counter;

	function __construct() {

		$this->counter = 0;
	}

	function increment() {
		return ++ $this->counter;
	}

	function decrement() {
		return -- $this->counter;
	}

	function getValue() {
		return $this->counter;
	}


}