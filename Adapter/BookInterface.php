<?php declare(strict_types=1);


namespace app\Adapter;


interface BookInterface {
	public function open();

	public function turnPage();


}