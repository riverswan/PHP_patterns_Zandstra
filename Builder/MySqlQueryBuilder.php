<?php declare(strict_types=1);


namespace app\Builder;


class MySqlQueryBuilder implements SqlQueryBuilder {
	protected $queryClass;

	public function init() {
		$this->queryClass = new \StdClass;
	}

	public function select($dbTable, array $args): SqlQueryBuilder {
		$this->init();

		$this->queryClass->base = "SELECT " . implode(",", $args) . "  FROM " . $dbTable;

		return $this;

	}


	public function limit(int $start, int $end): SqlQueryBuilder {
		$this->queryClass->limit = " LIMIT $start,$end";
		return $this;
	}

	public function getSql(): string {
		$str = "";
		foreach ($this->queryClass as $key => $value) {
			$str .= $value;
		}
		return $str;
	}

	public function where(string $field, string $value, string $operator = "="): SqlQueryBuilder {
		$this->queryClass->where = " WHERE $field $operator $value";
		return $this;
	}
}