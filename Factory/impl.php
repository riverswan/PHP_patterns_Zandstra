<?php

use app\Factory\BloggsCommsManager;
use app\Factory\FileLoggerFactory;
use app\Factory\StandardLoggerFactory;

require_once "../vendor/autoload.php";
$manager = new BloggsCommsManager();
echo $manager->getHeaderText();
echo $manager->getAppEncoder()->encode();
echo $manager->getFooterText();

echo "<br/> \n\n";

$fileLoggerFactory = new FileLoggerFactory("path to file");
$fileLogger = $fileLoggerFactory->createLogger();
$fileLogger->log("message from File logger");

$standardLoggerFactory = new StandardLoggerFactory();
$standardLogger = $standardLoggerFactory->createLogger();
$standardLogger->log("message from Std logger");