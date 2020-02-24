<?php declare(strict_types=1);


namespace app\Bridge;


class PlainTextFormatter implements FormatterInterface {

	public function format(string $string): string {
		return mb_strtoupper($string);
	}
}