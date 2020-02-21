<?php declare(strict_types=1);

namespace app\Prototype;
require_once "../vendor/autoload.php";


$earthTerrainFactory = new TerrainFactory(new EarthSea(), new EarthForest(), new EarthPlains());
$marsTerrainFactory = new TerrainFactory(new MarsSea(), new MarsForest(), new MarsPlains());

echo $earthTerrainFactory->getForest()->getTitle() . "\n";
echo $earthTerrainFactory->getSea()->getTitle() . "\n";
echo $earthTerrainFactory->getPlains()->getTitle() . "\n";

echo $marsTerrainFactory->getPlains()->getTitle() . "\n";
echo $marsTerrainFactory->getSea()->getTitle() . "\n";
echo $marsTerrainFactory->getForest()->getTitle() . "\n";