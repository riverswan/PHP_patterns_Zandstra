<?php declare(strict_types=1);


namespace app\Facade;


class AudioMixer {

	/**
	 * AudioMixer constructor.
	 */
	public function __construct() {
		echo "AudioMixer created \n";
	}

	public static function fix(string $result) {
		return $result;
	}
}