<?php declare(strict_types=1);


namespace app\Prototype;


class EarthSea extends Sea {
	public function __construct() {
		$this->title = "Earth sea";
		echo $this->getTitle() . "\n";
	}

	public function __clone() {
		$this->title .= " clone";
	}
}