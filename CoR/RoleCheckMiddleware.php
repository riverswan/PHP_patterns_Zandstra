<?php declare(strict_types=1);


namespace app\CoR;


class RoleCheckMiddleware extends Middleware {
	public function check(string $email, string $password) {

		if ($email === "admin@example.com") {
			echo "RoleCheckMiddleware: Hello, admin!\n";

			return true;
		}
		echo "RoleCheckMiddleware: Hello, user!\n";

		return parent::check($email, $password);
	}

}