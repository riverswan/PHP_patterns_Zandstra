<?php declare(strict_types=1);


namespace app\DependencyInjection;


class QueryBuilder implements Query {
	private $db;

	public function __construct(\PDO $dbServer) {
		$this->db = $dbServer;
	}

	public function select($table): array {
		$query = "select * from $table";
		$res = $this->db->query($query);
		return $res->fetchAll(\PDO::FETCH_ASSOC);
	}
}