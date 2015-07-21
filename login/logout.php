<?php #this script is responsible for logging out a user from active session ?>
<?php
	
	session_start();
	unset($_SESSION['param1']);
	unset($_SESSION['param2']);
	session_destroy();
?>