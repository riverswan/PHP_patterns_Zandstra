<?php declare(strict_types=1);


namespace app\Facade;


class VideoFile {

	public function __construct($filename) {
		echo "Video file $filename created \n";
	}
}