<?php 
// This class is for retrieving values from database
	require_once("database.php");
?>
<?php
	class retrieval
	{
			private $id;
			private $id_no;
			private $row;
			function __construct()
			{

			}
			function newuser()
			{
				$db=new database();
				$db->connect();
				$this->id=mysql_query("SELECT max(userID) as maximum from users",$db->connection);
				while($this->row=mysql_fetch_array($this->id))
				{
					if(empty($this->row['maximum']))
			        {
			          $this->id_no="AUR00001";
			        }
			        else
			        {
				          if(intval(substr($this->row['maximum'], 8))==99999)
				          {
					            $str=substr($this->row['maximum'],0,8);
					            ++$str;
					            $this->id_no=$str.'00001';
				           
				          }
			          else
			           		 $this->id_no=++$this->row['maximum'];
			        }
			        
				}
				return $this->id_no;
			}
	}		
	//$rt=new retrieval();
	//echo $rt->newuser();
?>