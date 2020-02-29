<?php declare(strict_types=1);


namespace app\Mediator;


class BaseComponent {
	protected $mediator;

	public function __construct(MediatorInterface $mediator = null) {
		$this->setMediator($mediator);
	}

	/**
	 * @param MediatorInterface $mediator
	 */
	public function setMediator(MediatorInterface $mediator = null): void {
		$this->mediator = $mediator;
	}

}