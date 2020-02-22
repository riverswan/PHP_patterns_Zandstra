<?php declare(strict_types=1);


namespace app\Composite;


abstract class Unit {
	abstract public function bombardStrength(): int;

	public function addUnit(Unit $unit) {
		throw new \Exception("method should not be called");
	}

	public function removeUnit(Unit $unit) {
		throw new \Exception("method should not be called");
	}
}