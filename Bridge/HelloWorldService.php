<?php declare(strict_types=1);


namespace app\Bridge;


class HelloWorldService extends Service {
	public function get($string): string {
		return $this->formatter->format($string);
	}
}