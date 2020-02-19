<?php declare(strict_types=1);

namespace app\Factory;
class FileLogger implements Logger {

	private $filepath;

	public function __construct($filepath) {
		$this->filepath = $filepath;
	}

	public function log($message): void {
		$str = sprintf("Message from FileLogger: %s , %s \n", $message, $this->filepath);
		echo $str;
	}
}
