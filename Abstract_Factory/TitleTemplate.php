<?php declare(strict_types=1);


namespace app\Abstract_Factory;


interface TitleTemplate {
	public function getTemplateString(): string;
}