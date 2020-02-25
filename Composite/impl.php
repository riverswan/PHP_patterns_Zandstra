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


echo "\n\n";

function clientCode(Component $component) {

	echo "RESULT: " . $component->operation();

}

$tree = new Composite();
$branch1 = new Composite();
$branch1->add(new Leaf);
$branch1->add(new Leaf);
$branch2 = new Composite();
$branch2->add(new Leaf);
$tree->add($branch1);
$tree->add($branch2);
echo "Client: Now I've got a composite tree:\n";
clientCode($tree);
echo "\n\n";
