<?php
spl_autoload_register();

$pref = Preferences::getInstance();
$pref->setProperty("name","Pavel");
$pref2 = Preferences::getInstance();
$pref3 = Preferences::getInstance();
unset($pref);

echo $pref3->getProperty("name");

