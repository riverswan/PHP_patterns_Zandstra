<?php declare(strict_types=1);


namespace app\Decorator;


class TextFormatter implements InputFormatInterface {
	protected $inputFormat;

	public function __construct(InputFormatInterface $inputFormat) {
		$this->inputFormat = $inputFormat;
	}


	public function formatText(string $text): string {
		return $this->inputFormat->formatText($text);
	}
}