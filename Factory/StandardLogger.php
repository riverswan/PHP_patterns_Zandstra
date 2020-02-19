<?php declare(strict_types=1);
namespace app\Factory;

class StandardLogger implements Logger {

	public function log($message) : void {
		echo "Message from StandardLogger: " . $message;
	}
}
