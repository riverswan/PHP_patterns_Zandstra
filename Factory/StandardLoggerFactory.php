<?php declare(strict_types=1);
namespace app\Factory;

class StandardLoggerFactory implements LoggerFactory {
	public function createLogger(): Logger {
		return new StandardLogger();
	}
}

