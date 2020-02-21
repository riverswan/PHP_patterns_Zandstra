<?php declare(strict_types=1);


namespace app\Prototype;


class EarthSea implements Sea {
	private $title;

	public function __construct() {
		$this->title = "Earth sea";
	}

	public function __clone() {
		$this->title .= " clone";
	}


}