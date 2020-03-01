<?php declare(strict_types=1);


namespace app\Observer;


use SplObserver;

class Subject implements \SplSubject {
	public $state;
	private $observers;

	/**
	 * Subject constructor.
	 */
	public function __construct() {
		$this->observers = new \SplObjectStorage;
	}


	/**
	 * @inheritDoc
	 */
	public function attach(SplObserver $observer) {
		echo "Subject: Attached an observer.\n";
		$this->observers->attach($observer);
	}

	/**
	 * @inheritDoc
	 */
	public function detach(SplObserver $observer) {
		$this->observers->detach($observer);
		echo "Subject: Detached an observer.\n";
	}

	/**
	 * @inheritDoc
	 */
	public function notify() {
		echo "Subject: Notifying observers...\n";
		foreach ($this->observers as $observer) {
			$observer->update($this);
		}
	}

	public function someBusinessLogic(): void {
		echo "\nSubject: I'm doing something important.\n";
		$this->state = rand(0, 10);

		echo "Subject: My state has just changed to: {$this->state}\n";
		$this->notify();
	}
}