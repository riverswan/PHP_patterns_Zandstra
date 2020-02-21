<?php declare(strict_types=1);


namespace app\Prototype;


class EarthPlains implements Plains {
	private $title;

	public function __construct() {
		$this->title = "Earth plains";
	}

	public function __clone() {
		$this->title .= " clone";
	}


}