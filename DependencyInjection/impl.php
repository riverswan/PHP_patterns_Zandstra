<?php declare(strict_types=1);

namespace app\DependencyInjection;

require_once "../vendor/autoload.php";

$pdo = MySqlConnect::connect("localhost", "testdi", "root", "");

$qB = new QueryBuilder($pdo);
print_r($qB->select("testdi"));