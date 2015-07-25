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
			$this->connection=mysqli_connect($this->host,$this->user,$this->password,$this->database) or die(mysqli_error());
		}

		//function to insert data in database
		function insertData($insertQuery)
		{	
			return mysqli_query($this->connection,$insertQuery) or die("error");
		}
		

		//function to select data from database
		function selectData($selectQuery)
		{
			return mysqli_query($this->connection,$selectQuery);
		}
		function del($delQuery)
		{
			return mysqli_query($this->connection , $delQuery);
		}
		//function to disconnect the current connection from database
		function disconnect()
		{
			mysqli_close($this->connection);
		}
	}

?>
