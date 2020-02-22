<?php declare(strict_types=1);
namespace app\Composite;

require_once "../vendor/autoload.php";


$army = new Army();
$archer = new Archer();
$laserCannon = new LaserCannonUnit();

$army->addUnit($archer);
$army->addUnit($laserCannon);

print_r($army->bombardStrength());

$subArmy = new Army();
$subArmy->addUnit(new Archer());
$subArmy->addUnit(new LaserCannonUnit());
$subArmy->addUnit(new Archer());
$subArmy->addUnit($army);

echo "\n";

print_r($subArmy->bombardStrength());
