<?php declare(strict_types=1);


namespace app\Prototype;


class MarsSea extends Sea {
	public function __construct() {
		$this->title = "Mars sea";
		echo $this->getTitle() . "\n";
	}

	public function __clone() {
		$this->title .= " clone";
	}
}