<?php
 include_once "../classes/database.php";
 include_once "../classes/retrieval.php";
?>
<?php
 function encryptIt( $q ) {
    $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
    $qEncoded      = base64_encode( mcrypt_encrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), $q, MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ) );
    return( $qEncoded );
}

function unique_salt() {
 
    return substr(sha1(mt_rand()),0,22);
}

 if(!empty($_REQUEST["Submit"]))
{ 
	//input

	$firstname=$_POST["firstName"];
	$lastname=$_POST["lastName"];
	$user_name=$firstname." ".$lastname;
	$reg_no=$_POST['regNo'];
	$domain=$_POST['domain'];
	$email=$_POST['username']; 
 	$pass=$_POST["password"];
 	
 	$unique_salt = unique_salt();

 	$hash = sha1($unique_salt . $pass);
 	$encrypted = encryptIt($hash);
 	$pass=$encrypted;
	//creation of object
 	
 	$rt=new retrieval();
 	$user_id=$rt->newuser();
	$db=new database();
	$db->connect();
	//encryption
 	
 	$encrypted = encryptIt($unique_salt);
 	$unique_salt = $encrypted;
 	
 	
 	$sql="INSERT INTO users( userID,     user_name    , password , salt , registration_no , domain , email ) 
 	   	  VALUES( '$user_id' , '$user_name' , '$pass' , '$unique_salt' , '$reg_no' , '$domain', '$email')";
   	
   	if(!empty($db->insertData($sql)))
   		echo "true";
   	else
   		echo "false";
   $db->disconnect();
}
?> 
