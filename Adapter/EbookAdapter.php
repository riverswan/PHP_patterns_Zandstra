<?php declare(strict_types=1);


namespace app\Adapter;


class EbookAdapter implements BookInterface {
	private $eBook;

	public function __construct(EBookInterface $eBook) {
		$this->eBook = $eBook;
		echo "Adapter activated \n";
	}


	public function open() {
		$this->eBook->unlock();
	}

	public function turnPage() {
		$this->eBook->pressNext();
	}

	public function getPage() {
		$this->eBook->getPage();
	}
}