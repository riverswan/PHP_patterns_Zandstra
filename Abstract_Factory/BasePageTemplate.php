<?php declare(strict_types=1);


namespace app\Abstract_Factory;


abstract class BasePageTemplate implements PageTemplate {
	protected $titleTemplate;

	public function __construct(TitleTemplate $titleTemplate) {
		$this->titleTemplate = $titleTemplate;
	}

}