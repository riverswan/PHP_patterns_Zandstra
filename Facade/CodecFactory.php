<?php declare(strict_types=1);


namespace app\Facade;


class CodecFactory {

	/**
	 * CodecFactory constructor.
	 */
	public function __construct() {
		echo "CodecFactory created \n";
	}

	public static function extract($filename) {
		return $filename;
	}
}