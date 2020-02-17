<?php
spl_autoload_register();

abstract class Lesson {
	private $duration;


	private $costStrategy;

	public function __construct($duration, $costStrategy) {
		$this->duration = $duration;
		$this->costStrategy = $costStrategy;
	}

	public function cost() : int {
		return $this->costStrategy->cost($this);
	}

	public function chargeType() : string {
		return $this->costStrategy->chargeType();
	}


	public function getDuration() : int {
		return $this->duration;
	}
}

class Lecture extends Lesson {
	public function __construct() {
		echo "Implementation of Lecture class";
	}

}


class Seminar extends Lesson {
	public function __construct() {
		echo "Implementation of Lecture class";
	}

}