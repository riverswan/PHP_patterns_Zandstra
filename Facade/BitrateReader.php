<?php declare(strict_types=1);


namespace app\Facade;


class BitrateReader {

	/**
	 * BitrateReader constructor.
	 */
	public function __construct() {
		echo "BitrateReader created \n";
	}

	public function read($filename, $sourceCodec) {
		return "reading from buffer \n";
	}

	public static function convert($buffer, $destinationCodec) {
		return "converting \n";
	}
}