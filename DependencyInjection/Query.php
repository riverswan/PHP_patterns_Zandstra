<?php declare(strict_types=1);


namespace app\DependencyInjection;


interface Query {
	public function select($table): array;
}