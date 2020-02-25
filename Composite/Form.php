<?php declare(strict_types=1);


namespace app\Composite;


class Form implements RenderableInterface {
	private $elements;

	public function addElement(RenderableInterface $renderable) {
		$this->elements[] = $renderable;
	}

	public function render(): string {
		$formHtml = "<form>";
		foreach ($this->elements as $element) {
			$formHtml .= $element->render();
		}

		$formHtml .= "</form>";

		return $formHtml;
	}
}