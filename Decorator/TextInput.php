<?php declare(strict_types=1);


namespace app\Decorator;


class TextInput implements InputFormatInterface {

	public function formatText(string $text): string {
		return $text;
	}
}