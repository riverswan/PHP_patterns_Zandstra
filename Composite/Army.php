<?php declare(strict_types=1);


namespace app\Composite;


class Army {
	private $units;

	public function addUnit(Unit $unit): void {
		$this->units[] = $unit;
	}

	public function bombardStrength(): int {
		$res = 0;

		foreach ($this->units as $unit) {
			$res += $unit->bombardStrength();
		}

		return $res;
	}

}