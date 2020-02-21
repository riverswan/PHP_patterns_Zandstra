<?php declare(strict_types=1);


namespace app\ServiceLocator;


class AppConfig {
	private static $instance;
	private $classType;

	private function __construct() {
		echo "init \n";
		$this->init();
	}


	/**
	 * @return mixed
	 */
	public function getClassType() {
		return $this->classType;
	}

	private function init() {
		switch (Settings::$TYPE) {
			case 1 :
				$this->classType = new SomeClassA();
				break;
			default :
				$this->classType = new SomeClassB();
		}
	}

	public static function getInstance() {
		if (empty(self::$instance)) {
			self::$instance = new self();
		}
		return self::$instance;
	}

}