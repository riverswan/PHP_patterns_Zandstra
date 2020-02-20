<?php declare(strict_types=1);
namespace app\Builder;
require_once "../vendor/autoload.php";

$a = new MySqlQueryBuilder();
$a->select("Table", ["content"])->where("field", "value")->limit(0, 10);
$query = $a->getSql();

print_r($query);