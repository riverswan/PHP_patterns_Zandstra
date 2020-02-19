<?php declare(strict_types=1);


namespace app\Abstract_Factory;


class TwigTemplateFactory implements TemplateFactory {

	public function createTitleTemplate(): TitleTemplate {
		return new TwigTitleTemplate();
	}

	public function createPageTemplate(): PageTemplate {
		return new TwigPageTemplate($this->createTitleTemplate());
	}

	public function getRenderer(): TemplateRenderer {
		return new TwigRenderer();
	}
}