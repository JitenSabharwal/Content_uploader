<?php
	#this script contains the code for verifying the login of admin
	include("../classes/database.php");

?>
<?php
	if($_GET['userId'] || $_GET['password'])
	{

		$db= new Database();
		$db->connect();
		$userId=$_POST['userId'];
		$password=md5($_POST['password']);
		$loginQuery="select * from users where user_id='$userId' and password='$password'";
		$loginQueryResult=$db->selectData($loginQuery);
		$db->disconnect();
		if(mysql_num_rows($loginQueryResult)>0)
		{
			$loginQueryResult=mysql_fetch_assoc($loginQueryResult);
			if($loginQueryResult['type_of_user']=='0')
			{
				session_start();
				$_SESSION['param1']=$loginQueryResult['user_id'];
				$_SESSION['param2']=time();
			}
			else
				echo "0";
		}
		else
			echo "0";
	}
?>
