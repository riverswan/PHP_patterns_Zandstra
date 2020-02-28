<?php declare(strict_types=1);


namespace app\Command;


interface Command {
	public function execute(): void;

	public function getId(): int;

	public function getStatus(): int;
}