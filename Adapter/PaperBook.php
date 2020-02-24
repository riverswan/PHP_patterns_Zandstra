<?php declare(strict_types=1);


namespace app\Adapter;


class PaperBook implements BookInterface {

	public function open() {
		echo __CLASS__ . " page Opened \n";
	}

	public function turnPage() {
		echo __CLASS__ . " page turned \n";
	}


	public function getPage() {
		echo __CLASS__ . " page get \n";
	}
}