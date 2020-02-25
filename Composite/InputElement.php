<?php declare(strict_types=1);


namespace app\Composite;


class InputElement implements RenderableInterface {

	public function render(): string {
		return "<input type='text'/>";
	}
}