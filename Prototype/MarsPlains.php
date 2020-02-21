<?php declare(strict_types=1);


namespace app\Prototype;


class MarsPlains extends Plains {
	public function __construct() {
		$this->title = "Mars plains";
		echo $this->getTitle() . "\n";
	}

	public function __clone() {
		$this->title .= " clone";
	}
}