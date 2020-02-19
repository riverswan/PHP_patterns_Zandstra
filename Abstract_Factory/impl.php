<?php

namespace app\Abstract_Factory;

require "../vendor/autoload.php";

$manager = new BloggsCommsManager();
echo $manager->getHeaderText();
echo $manager->make(CommsManager::APPT)->encode();
echo $manager->getFooterText();