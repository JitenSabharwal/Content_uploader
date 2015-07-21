<?php
session_start();
if(isset($_SESSION['sess_user']))
{
	
}
else
{
	header("location:loginindex.php");
}
?>