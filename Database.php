<?php

/**
 * Setup a connection to the local MySQL database.
 */
class Database
{
	private PDO $connection;
	private string $host = 'localhost';
	private int $port = 3306;
	private string $dbname = 'php';
	private string $user = 'root';

	/**
	 * By using a `__construct` method, we only need to setup a `PDO` once.
	 */
	public function __construct()
	{
		$this->connection = new PDO(
		   "mysql:
			host={$this->host};
			port={$this->port};
			dbname={$this->dbname};
			user={$this->user};
			charset=utf8mb4"
		);
	}

	/**
	 * Query data from the database with a query.
	 * @param string
	 * @return PDOStatement[]
	 */
	public function query(string $query): PDOStatement
	{
		$dbquery = $this->connection->prepare($query);
		$dbquery->execute();

		return $dbquery;
	}
}
