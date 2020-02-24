<?php declare(strict_types=1);

namespace app\Adapter;

require_once "../vendor/autoload.php";

$paperBook = new PaperBook();
$kindle = new Kindle();
$eBookAdapter = new EbookAdapter($kindle);
$eBookAdapter->getPage();
$eBookAdapter->open();
$eBookAdapter->turnPage();