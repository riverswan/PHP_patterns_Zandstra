<?php declare(strict_types=1);


namespace app\Prototype;


class EarthPlains extends Plains {
	public function __construct() {
		$this->title = "Earth plains";
		echo $this->getTitle() . "\n";
	}

	public function __clone() {
		$this->title .= " clone";
	}
}