<?php declare(strict_types=1);


namespace app\Prototype;


class EarthForest implements Forest {
	private $title;

	public function __construct() {
		$this->title = "Earth forest";
	}

	public function __clone() {
		$this->title .= " clone";
	}


}