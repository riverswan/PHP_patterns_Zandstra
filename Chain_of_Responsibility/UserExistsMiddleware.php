<?php declare(strict_types=1);


namespace app\Chain_of_Responsibility;


class UserExistsMiddleware extends Middleware {
	private $server;

	public function __construct(Server $server) {
		$this->server = $server;
	}

	public function check(string $email, string $password) {
		if (!$this->server->hasEmail($email)) {
			echo "UserExistsMiddleware: This email is not registered!\n";

			return false;
		}

		if (!$this->server->isValidPassword($email, $password)) {
			echo "UserExistsMiddleware: Wrong password!\n";

			return false;
		}

		return parent::check($email, $password);
	}


}