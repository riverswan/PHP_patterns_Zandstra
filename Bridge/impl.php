<?php declare(strict_types=1);
namespace app\Bridge;
require_once "../vendor/autoload.php";

$service = new HelloWorldService(new HtmlTextFormatter());
$service2 = new HelloWorldService(new PlainTextFormatter());
echo($service->get("string must be in 'p' "));
echo($service2->get("string must be UPPERCASE"));