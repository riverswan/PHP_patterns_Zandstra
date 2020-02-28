<?php declare(strict_types=1);


namespace app\Iterator;


class AlphabeticalOrderIterator implements \Iterator {
	private $collection;
	private $position = 0;
	private $reverse = false;

	/**
	 * @inheritDoc
	 */
	public function current() {
		return $this->collection->getItems()[$this->key()];
	}

	/**
	 * @inheritDoc
	 */
	public function next() {
		$this->position = $this->key() + ($this->reverse ? -1 : 1);
	}

	/**
	 * @inheritDoc
	 */
	public function key() {
		return $this->position;
	}

	/**
	 * @inheritDoc
	 */
	public function valid() {
		return isset($this->collection->getItems()[$this->key()]);
	}

	/**
	 * @inheritDoc
	 */
	public function rewind() {
		$this->position = $this->reverse ? count($this->collection->getItems()) - 1 : 0;
	}
}