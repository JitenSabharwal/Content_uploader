<?php
	session_start();
	require_once('../classes/database.php');
	require_once('../classes/retrieval.php');
	#error_reporting(0);

?>
<?php
$var2 = $_REQUEST["id"];
$head = $_REQUEST["head"];
?>
<?php
	
	$db=new database();
	$db->connect();
	$query="SELECT * from users where email='".$_SESSION['sess_user']."'";
	
	if(mysqli_num_rows($db->selectData($query))>0)
		{
			$rt=new retrieval();
			$event_id=$rt->events();
			echo $event_id;
			$row=mysqli_fetch_array($db->selectData($query));	
			$domain=$row['domain'];
			$userid=$row['userID'];
			$query="INSERT INTO events (event_id , event_name, event_domain ) VALUES( '$event_id' , '$head' , '$domain') ";
			$db->insertData($query);
			
		}
	else
		{
			echo "Daabse not updated"; 
		}


?>
<?php
			$targetfolder="../content/";
			
			if(!is_dir($targetfolder))		
				mkdir($targetfolder);
				
				if(!is_dir($targetfolder.$GLOBALS['domain']))
					mkdir($targetfolder.$GLOBALS['domain']);
						
						if(!file_exists($targetfolder.$GLOBALS['domain']."/".$head.".json"))
						{
							$path=$targetfolder.$GLOBALS['domain']."/".$head.".json";
							$myfile = fopen($path, "w") or die("Unable to open file!");
							fwrite($myfile, $var2);
							
							echo $path;		
						}			
?>
<?php
			$query="INSERT INTO users_events(user_id , event_id, adder , content_path) VALUES('$userid' , '$event_id' ,'$userid','$path')";
			echo "<br>";
			$db->insertData($query);
			$db->disconnect();
?>