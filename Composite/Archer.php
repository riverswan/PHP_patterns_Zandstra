<?php declare(strict_types=1);


namespace app\Composite;


class Archer extends Unit {

	public function bombardStrength(): int {
		return 4;
	}
}