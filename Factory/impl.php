<?php

use app\Factory\BloggsCommsManager;

require_once "../vendor/autoload.php";
$manager = new BloggsCommsManager();
echo $manager->getHeaderText();
echo $manager->getAppEncoder()->encode();
echo $manager->getFooterText();