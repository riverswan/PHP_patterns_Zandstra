<?php declare(strict_types=1);
namespace app\Factory;

interface LoggerFactory {
	public function createLogger() : Logger;
}
