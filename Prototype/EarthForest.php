<?php declare(strict_types=1);


namespace app\Prototype;


class EarthForest extends Forest {
	public function __construct() {
		$this->title = "Earth forest";
		echo $this->getTitle() . "\n";
	}

	public function __clone() {
		$this->title .= " clone";
	}
}