<?php declare(strict_types=1);


namespace app\Prototype;


class MarsSea implements Sea {
	private $title;

	public function __construct() {
		$this->title = "Mars sea";
	}

	public function __clone() {
		$this->title .= " clone";
	}


}