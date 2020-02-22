<?php declare(strict_types=1);
namespace app\Composite;

require_once "../vendor/autoload.php";


$army = new Army();
$archer = new Archer();
$laserCannon = new LaserCannonUnit();

$army->addUnit($archer);
$army->addUnit($laserCannon);

print_r($army->bombardStrength());
