<?php declare(strict_types=1);


namespace app\Adapter;


class Kindle implements EBookInterface {

	public function pressNext() {
		echo __CLASS__ . " press next \n";
	}

	public function getPage() {
		echo __CLASS__ . " get page \n";
	}

	public function unlock() {
		echo __CLASS__ . " unlock \n";
	}
}