<?php declare(strict_types=1);


namespace app\Composite;


interface RenderableInterface {
	public function render(): string;
}