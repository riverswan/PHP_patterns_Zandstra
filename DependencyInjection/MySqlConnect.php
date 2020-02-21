<?php declare(strict_types=1);


namespace app\DependencyInjection;

use \PDO;


class MySqlConnect {

	public static function connect($host, $dbName, $name, $pass): \PDO {
		return new \PDO("mysql:host=$host;dbname=$dbName;", $name, $pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
	}

}