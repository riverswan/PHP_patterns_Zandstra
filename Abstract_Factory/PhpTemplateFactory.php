<?php declare(strict_types=1);


namespace app\Abstract_Factory;


class PhpTemplateFactory implements TemplateFactory {

	public function createTitleTemplate(): TitleTemplate {
		return new PhpTitleTemplate();
	}

	public function createPageTemplate(): PageTemplate {
		return new PhpPageTemplate($this->createTitleTemplate());
	}

	public function getRenderer(): TemplateRenderer {
		return new PhpTemplateRenderer();
	}
}