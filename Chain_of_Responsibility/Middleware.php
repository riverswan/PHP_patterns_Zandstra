<?php declare(strict_types=1);


namespace app\Chain_of_Responsibility;


abstract class Middleware {
	private $next;

	public function linkWith(Middleware $next) {
		$this->next = $next;
		return $next;
	}

	public function check(string $email, string $password) {
		if (!$this->next) return true;
		return $this->next->check($email, $password);
	}
}