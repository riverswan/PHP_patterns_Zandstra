<?php declare(strict_types=1);


namespace app\Abstract_Factory;


interface TemplateFactory {
	public function createTitleTemplate(): TitleTemplate;

	public function createPageTemplate(): PageTemplate;

	public function getRenderer(): TemplateRenderer;
} 