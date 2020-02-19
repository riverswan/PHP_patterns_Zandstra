<?php declare(strict_types=1);


namespace app\Abstract_Factory;


interface PageTemplate {
	public function getTemplateString(): string;
}