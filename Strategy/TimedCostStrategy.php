<?php


class TimedCostStrategy extends CostStrategy {

	public function cost(Lesson $lesson): int {
		return $lesson->getDuration() * 5;
	}

	public function chargeType(): string {
		return "Rate per hour";
	}
}