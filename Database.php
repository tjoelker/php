<?php

/**
 * Setup a connection to the local MySQL database.
 */
class Database
{
	private PDO $connection;
	private string $host = 'localhost'; // Deprecated, configured in `$config`
	private int $port = 3306; // Deprecated, configured in `$config`
	private string $dbname = 'php'; // Deprecated, configured in `$config`
	private string $username = 'root'; // Deprecated, configured in `__construct()` parameter
	private ?string $password = ''; // Deprecated, configured in `__construct()` parameter

	/**
	 * By using a `__construct` method, we only need to setup a `PDO` once.
	 */
	public function __construct($config, $username = 'root', $password = '')
	{
		$this->connection = new PDO(
			'mysql:' . http_build_query($config, 'test', ';'),
			$username,
			$password,
			[
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
			],
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
