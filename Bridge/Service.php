<?php declare(strict_types=1);


namespace app\Bridge;


abstract class Service {
	protected $formatter;

	public function __construct(FormatterInterface $formatter) {
		$this->setImplementation($formatter);
	}

	public function setImplementation(FormatterInterface $formatter) {
		$this->formatter = $formatter;
	}

	abstract public function get($string): string;
}