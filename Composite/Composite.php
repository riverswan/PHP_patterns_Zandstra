<?php declare(strict_types=1);


namespace app\Composite;


class Composite extends Component {

	protected $children;

	public function __construct() {
		$this->children = new \SplObjectStorage();
	}

	public function add(Component $component): void {
		$this->children->attach($component);
	}

	public function remove(Component $component): void {
		$this->children->detach($component);
	}

	public function isComposite(): bool {
		return true;
	}


	public function operation(): string {
		$result = [];
		foreach ($this->children as $child) {
			$result[] = $child->operation();
		}

		return "Branch( " . implode("+", $result) . " )";
	}
}