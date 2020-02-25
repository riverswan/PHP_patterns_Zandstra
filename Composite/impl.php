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
clientCode($tree);
echo "\n\n";

$form = new Form();
$text1 = new TextElement(123);
$form->addElement($text1);

$form2 = new Form();
$form2->addElement(new InputElement());
$form2->addElement(new InputElement());
$form2->addElement(new InputElement());
$form2->addElement($form);

print_r($form2->render());
