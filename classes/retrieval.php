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
				$this->id=mysqli_query($db->connection,"SELECT max(userID) as maximum from users");
				while($this->row=mysqli_fetch_array($this->id))
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
			function events()
			{
				$db=new database();
				$db->connect();
				$this->id=$db->selectData("SELECT max(event_id) as maximum from events");
				while($this->row=mysqli_fetch_array($this->id))
				{
					if(empty($this->row['maximum']))
			        {
			          $this->id_no="EVN00001";
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