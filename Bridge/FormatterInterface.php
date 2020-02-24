<?php declare(strict_types=1);


namespace app\Bridge;


interface FormatterInterface {
	public function format(string $string): string;
}