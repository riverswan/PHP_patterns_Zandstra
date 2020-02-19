<?php declare(strict_types=1);
namespace app\Factory;

class FileLoggerFactory implements LoggerFactory {
	private $pathName;

	public function __construct($pathName) {

		$this->pathName = $pathName;
	}


	public function createLogger() : Logger {
		return new FileLogger($this->pathName);
	}
}
