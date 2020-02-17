<?php


abstract class CostStrategy {
	abstract public function cost(Lesson $lesson): int;

	abstract public function chargeType(): string;
}

class TimedCostStrategy extends CostStrategy {

	public function cost(Lesson $lesson): int {
		return $lesson->getDuration() * 5;
	}

	public function chargeType(): string {
		return "Rate per hour";
	}
}

class FixedCostStrategy extends CostStrategy {

	public function cost(Lesson $lesson): int {
		return 100;
	}

	public function chargeType(): string {
		return "Fixed price";
	}
}