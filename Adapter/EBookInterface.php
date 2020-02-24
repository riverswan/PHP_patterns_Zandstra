<?php declare(strict_types=1);


namespace app\Adapter;


interface EBookInterface {
	public function pressNext();

	public function getPage();

	public function unlock();
}