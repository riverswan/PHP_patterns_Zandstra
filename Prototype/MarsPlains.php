<?php declare(strict_types=1);


namespace app\Prototype;


class MarsPlains implements Plains {
	private $title;

	public function __construct() {
		$this->title = "Mars plains";
	}

	public function __clone() {
		$this->title .= " clone";
	}


}