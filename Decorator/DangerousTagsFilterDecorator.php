<?php declare(strict_types=1);


namespace app\Decorator;


class DangerousTagsFilterDecorator extends TextFormatter {
	private $dangerousTagPatterns = [
		"|<script.*?>([\s\S]*)?</script>|i", // ...
	];

	private $dangerousAttributes = [
		"onclick", "onkeypress", // ...
	];

	public function formatText(string $text): string {
		$text = parent::formatText($text);

		foreach ($this->dangerousTagPatterns as $dangerousTagPattern) {
			$text = preg_replace($dangerousTagPattern, "", $text);

		}

		foreach ($this->dangerousAttributes as $attribute) {
			$text = preg_replace_callback('|<(.*?)>|', function ($matches) use ($attribute) {
				$result = preg_replace("|$attribute=|i", '', $matches[1]);
				return "<" . $result . ">";
			}, $text);
		}

		return $text;
	}


}