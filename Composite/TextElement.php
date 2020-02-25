<?php declare(strict_types=1);


namespace app\Composite;


class TextElement implements RenderableInterface {

	private $text;

	public function __construct($text) {
		$this->text = $text;
	}

	public function render(): string {
		return "<p>$this->text</p>";
	}
}