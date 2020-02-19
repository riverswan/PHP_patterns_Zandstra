<?php declare(strict_types=1);


namespace app\Abstract_Factory;


class PhpPageTemplate extends BasePageTemplate {

	public function getTemplateString(): string {
		$renderedTitle = $this->titleTemplate->getTemplateString();

		return <<<HTML
        <div class="page">
            $renderedTitle
            <article class="content"><?= \$content; ?></article>
        </div>
        HTML;
	}
}