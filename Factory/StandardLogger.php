<?php declare(strict_types=1);
namespace app\Factory;

class StandardLogger implements Logger {


	/**
	 * StandardLogger constructor.
	 */
	public function __construct() {
		echo "class " . __CLASS__ . " created\n";
	}

	public function log($message) : void {
		echo "Message from StandardLogger: " . $message;
	}
}
