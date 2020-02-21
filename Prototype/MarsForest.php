<?php declare(strict_types=1);


namespace app\Prototype;


class MarsForest implements Forest {
	private $title;

	public function __construct() {
		$this->title = "Mars forest";
	}

	public function __clone() {
		$this->title .= " clone";
	}


}