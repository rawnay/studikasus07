<?php
	class Config {
		private $dbServer = 'localhot';
		private $dbUser = 'root';
		private $dbPass = '';
		private $dbNameDb = 'studikasus';
		
		// put your code here
		function __construct()
		{
			$connection = mysql_connect($this->dbServer, $this->dbUser, $this->dbPass) or die('Oops connection error -> ' . mysql_error());
			mysql_select_db($this->dbNameDb) or die('Database error -> ' . mysql_error());
			
		}
	}
?>