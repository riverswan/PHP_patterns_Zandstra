<?php declare(strict_types=1);


namespace app\Adapter;


class PaperBook implements BookInterface {

	public function open() {
		echo __CLASS__ . "page Opened";
	}

	public function turnPage() {
		echo __CLASS__ . "page turned";
	}


	public function getPage() {
		echo __CLASS__ . "page get";
	}
}