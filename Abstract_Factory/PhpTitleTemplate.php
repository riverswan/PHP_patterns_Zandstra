<?php declare(strict_types=1);


namespace app\Abstract_Factory;


class PhpTitleTemplate implements TitleTemplate {
	public function getTemplateString(): string {
		return "<h1><?= \$title; ?></h1>";
	}
}