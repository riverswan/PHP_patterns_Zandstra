<?php declare(strict_types=1);


namespace app\Decorator;


class DisplayComment {
	public static function display(InputFormatInterface $inputFormat, string $text) {
		echo $inputFormat->formatText($text);
	}
}