<?php declare(strict_types=1);


namespace app\Mediator;


class BaseComponent {
	protected $mediator;

	/**
	 * BaseComponent constructor.
	 * @param $mediator
	 */
	public function __construct(MediatorInterface $mediator) {
		$this->setMediator($mediator);
	}

	/**
	 * @param MediatorInterface $mediator
	 */
	public function setMediator(MediatorInterface $mediator): void {
		$this->mediator = $mediator;
	}

}