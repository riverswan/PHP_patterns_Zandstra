<?php declare(strict_types=1);


namespace app\Composite;


class Army extends Unit {
	private $units = [];

	public function bombardStrength(): int {
		$res = 0;
		foreach ($this->units as $unit) {
			$res += $unit->bombardStrength();
		}
		return $res;
	}

	public function addUnit(Unit $unit) {
		if (in_array($unit, $this->units, true)) {
			return;
		}

		$this->units[] = $unit;
	}

	public function removeUnit(Unit $unit) {
		$index = array_search($unit, $this->units, true);
		if (is_int($index)) {
			array_splice($this->units, $index, 1, []);
		}
	}

}