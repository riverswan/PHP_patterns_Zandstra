<?php declare(strict_types=1);


namespace app\Decorator;


interface InputFormatInterface {
	public function formatText(string $text): string;
}