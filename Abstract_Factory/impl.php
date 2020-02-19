<?php

namespace app\Abstract_Factory;

require "../vendor/autoload.php";

$page = new Page('Sample page', 'This it the body.');

echo "Testing actual rendering with the PHPTemplate factory:\n";
echo $page->render(new PHPTemplateFactory);


