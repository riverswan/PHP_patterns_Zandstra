<?php declare(strict_types=1);

namespace app\CoR;
require_once "../vendor/autoload.php";

$server = new Server();
$server->register("admin@example.com", "admin_pass");
$server->register("user@example.com", "user_pass");

$middleware = new ThrottlingMiddleware(2);
$middleware
	->linkWith(new UserExistsMiddleware($server))
	->linkWith(new RoleCheckMiddleware);

$server->setMiddleware($middleware);

do {
	echo "\nEnter your email:\n";
	$email = readline();
	echo "Enter your password:\n";
	$password = readline();
	$success = $server->logIn($email, $password);
} while (!$success);
