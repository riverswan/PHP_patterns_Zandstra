<?php declare(strict_types=1);


namespace app\Decorator;


class PlainTextDecorator extends TextFormatter {
	public function formatText(string $text): string {
		$text = parent::formatText($text);
		return strip_tags($text);
	}

}