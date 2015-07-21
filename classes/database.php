<?php #this script contains the class for database connection and passing queries ?>
<?php
	class Database
	{
		public $host;
		public $user;
		public $password;
		public $database;
		public $connection;
		public $id;
		public $id_no;
		public $row;
		function __construct()
		{
			switch($_SERVER['HTTP_HOST'])
			{
				case "localhost:60":
					$this->host="localhost";
					$this->user="root";
					$this->password="";
					$this->database="content_uploader";
					break;
				
			}
		}

		//function to connect to database	
		function connect()
		{
			$this->connection=mysql_connect($this->host,$this->user,$this->password) or die(mysql_error());
			mysql_select_db($this->database) or die(mysql_error());
		}

		//function to insert data in database
		function insertData($insertQuery)
		{	
			return mysql_query($insertQuery , $this->connection) or die(err);
		}
		

		//function to select data from database
		function selectData($selectQuery)
		{
			return mysql_query($selectQuery,$this->connection);
		}
		function del($delQuery)
		{
			return mysql_query($delQuery,$this->connection);
		}
		//function to disconnect the current connection from database
		function disconnect()
		{
			mysql_close($this->connection);
		}
	}

?>
