<?php declare(strict_types=1);


namespace app\Bridge;


class HtmlTextFormatter implements FormatterInterface {
	public function format(string $string): string {
		return sprintf("<p>%s</p> \n", $string);
	}
}