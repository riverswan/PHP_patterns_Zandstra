<?php declare(strict_types=1);


namespace app\Composite;


class LaserCannonUnit extends Unit {

	public function bombardStrength(): int {
		return 50;
	}
}