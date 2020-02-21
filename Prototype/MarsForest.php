<?php declare(strict_types=1);


namespace app\Prototype;


class MarsForest extends Forest {
	public function __construct() {
		$this->title = "Mars forest";
		echo $this->getTitle() . "\n";
	}

	public function __clone() {
		$this->title .= " clone";
	}
}