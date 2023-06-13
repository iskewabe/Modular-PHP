<?php
class Core {
	// (A) PROPERTIES
	public $error = ""; // last error message
	public $pdo = null; //database connection
	public $stmt = null; //sql statement

	// (B) CONNECT TO DATABASE
	function __construct() {
		$this->pdo = new PDO(
			"mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET . ";dbname=" . DB_NAME,
			DB_USER,
			DB_PASSWORD,
			[
				PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
				PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
			]
		);
	}

	// (C) CLOSE CONNECTION WHEN DONE
	function __destrict() {
		if($this->stmt !== null) {$this->stmt = null;}
		if($this->pdo !== null) {$this->pdo = null;}
	}
}
