<?php declare(strict_types=1);


namespace app\Mediator;


interface MediatorInterface {
	public function notify(object $sender, string $event): void;
}