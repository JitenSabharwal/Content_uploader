<?php
include_once "../classes/database.php"; 
?>	
		<?php
function decryptIt( $q ) 
   {
          $cryptKey  = 'qJB0rGtIn5UB1xG03efyCp';
          $qDecoded      = rtrim( mcrypt_decrypt( MCRYPT_RIJNDAEL_256, md5( $cryptKey ), base64_decode( $q ), MCRYPT_MODE_CBC, md5( md5( $cryptKey ) ) ), "\0");
          return( $qDecoded );
  } 
  
if(isset($_POST["Submit"])) 
{
      //$id=$_POST["id"];
      $name=$_POST["login"];
      $pass=$_POST["password"];
      $count=0;
      $ban;
      $flag=0;
      $db=new database();
      $db->connect();
      //selcting from datbase
      /*$sql="SELECT * from session_count where user_name='$name'";
      //$stm2=$dbh->prepare("select * from session_count where name='".$name."'");
      $result=$db->selectData();
      foreach($result as $row)
      {
        $count++;
        $ban=$row['timestamp'];
      }
      if($count>3)
      {
      
        date_default_timezone_set("Asia/Kolkata");
        $time2=strtotime("now");
        if($time2<($ban+3*60*60)) 
        {
           header('Location:fail.php');   
        }
        else
        {
            $stm6=$db->del("delete from session_count where name='$name'");
            //$stm6->execute();  
         }
      }

      */
      
      $result=$db->selectData("SELECT * from users where email='$name'");
      //echo $result;
      if(empty($result))
      {
        echo "Failed";
      }
      else
      {
          while($row=mysqli_fetch_array($result))
          {
              	$salt=decryptIt($row['salt']);
              	
                $hash = sha1($salt . $pass);
                
                if(strcmp($row['email'],$name)==0 and strcmp(decryptIt($row['password']),$hash)==0)
                {  /*
                   echo "Successfuly logged in ! <br>";
                   echo "Welcome : ".$row['user_name'];
                  */
                    $flag=1;

                   // $db->del("delete from session_count where name='".$name."'");
                    
                    session_start();
                    $_SESSION['sess_user']=$name; //set session with username
                    echo "Success";
                    //header("Location: main.php");
                   
                //break;
                }
  

            }
       /* if($flag==0)
        {   
           date_default_timezone_set("Asia/Kolkata");
           $time=strtotime("now");
           $stm=$db->insertData("insert into session_count(name,timestamp) values('$name','$time')");
        	echo " <br> Loggin Failed ! ";

        }
        */

        }
      }
?>
