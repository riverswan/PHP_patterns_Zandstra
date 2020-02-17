<?php


class Seminar extends Lesson {
	public function __construct($duration, $costStrategy) {
		parent::__construct($duration, $costStrategy);
		echo "Implementation of Seminar class \n";
	}

}