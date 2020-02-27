<?php declare(strict_types=1);
namespace app\Facade;
require_once "../vendor/autoload.php";

$converter = new VideoConverter();
$converter->convert("fileName", "ogg");
$converter->save();

