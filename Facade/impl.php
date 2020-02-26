<?php declare(strict_types=1);
namespace app\Facade;
require_once "../vendor/autoload.php";

$converter = new VideoConverter();
$converter->convert("file", "ogg");
$converter->save();

