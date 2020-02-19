<?php

use app\Factory\BloggsCommsManager;
use app\Factory\FileLoggerFactory;

require_once "../vendor/autoload.php";
$manager = new BloggsCommsManager();
echo $manager->getHeaderText();
echo $manager->getAppEncoder()->encode();
echo $manager->getFooterText();


$fileLoggerFactory = new FileLoggerFactory("path to file");
$fileLogger = $fileLoggerFactory->createLogger();
$fileLogger->log("message from File logger");