<?php
spl_autoload_register();

$manager = new BloggsCommsManager();
echo $manager->getHeaderText();
echo $manager->getAppEncoder()->encode();
echo $manager->getFooterText();