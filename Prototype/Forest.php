<?php declare(strict_types=1);


namespace app\Prototype;


abstract class Forest {
	protected $title;

	public function getTitle(): string {
		return $this->title;
	}
}