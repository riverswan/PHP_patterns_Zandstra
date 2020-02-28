<?php declare(strict_types=1);

namespace app\Command;
require_once "../vendor/autoload.php";


$queue = Queue::get();

if ($queue->isEmpty()) {
	$queue->add(new IMDBGenresScrapingCommand);
}

$queue->work();