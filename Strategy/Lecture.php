<?php


class Lecture extends Lesson {
	public function __construct($duration, $costStrategy) {
		parent::__construct($duration, $costStrategy);
		echo "Implementation of Lecture class\n";
	}

}
