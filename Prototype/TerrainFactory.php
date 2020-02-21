<?php declare(strict_types=1);


namespace app\Prototype;


class TerrainFactory {
	/**
	 * @var Sea
	 */
	private $sea;
	/**
	 * @var Forest
	 */
	private $forest;
	/**
	 * @var Plains
	 */
	private $plains;

	public function __construct(Sea $sea, Forest $forest, Plains $plains) {

		$this->sea = $sea;
		$this->forest = $forest;
		$this->plains = $plains;
	}

	/**
	 * @return Sea
	 */
	public function getSea(): Sea {
		return clone $this->sea;
	}

	/**
	 * @return Forest
	 */
	public function getForest(): Forest {
		return clone $this->forest;
	}

	/**
	 * @return Plains
	 */
	public function getPlains(): Plains {
		return clone $this->plains;
	}


}