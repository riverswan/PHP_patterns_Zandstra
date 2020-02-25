<?php declare(strict_types=1);


namespace app\Composite;


abstract class Component {
	protected $parent;

	public function setParent(Component $parent) {
		$this->parent = $parent;
	}

	public function getParent(): Component {
		return $this->parent;
	}

	public function add(Component $component): void {
	}

	public function remove(Component $component): void {
	}

	abstract public function operation(): string;

	public function isComposite(): bool {
		return false;
	}

}