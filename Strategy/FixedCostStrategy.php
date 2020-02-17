<?php

class FixedCostStrategy extends CostStrategy {

	public function cost(Lesson $lesson): int {
		return 100;
	}

	public function chargeType(): string {
		return "Fixed price";
	}
}