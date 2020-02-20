<?php declare(strict_types=1);


namespace app\Builder;


interface SqlQueryBuilder {
	public function init();

	public function select($dbTable, array $args): SqlQueryBuilder;

	public function where(string $field, string $value, string $operator = "="): SqlQueryBuilder;

	public function limit(int $start, int $end): SqlQueryBuilder;

	public function getSql(): string;
}