<script>
	$(document).ready(function(){
		  $(".display").bind('click',function(){
                    var a=$(this).data("value");
                    window.open("./functions/display.php?record="+a);
                });        
	})
</script>
<h4>Events Created</h4>
<table class="hoverable" >

<?php
	error_reporting(0);
	session_start();
	require_once("../classes/database.php");
	$db=new database();
	$db->connect();
	$count=1;
?>

	<thead>
	<tr>
		<th>S.no</th>
		<th>Event Name</th>
		<th>Domian Name</th>
		<th>Time Of Creation</th>
		<th>Click to View</th>
	</tr>
	</thead>

<?php
	function display()
	{
?>
	<tbody>

	<tr>
		<td>	<?php echo $GLOBALS['count']++; 	?>  	</td>
		<td>	<?php echo $GLOBALS['event_name']; 	?>  	</td>
		<td>	<?php echo $GLOBALS['event_domain']; 	?>  	</td>
		<td>	<?php echo $GLOBALS['time']; 	?>  	</td>
		<td>	<a class="display" data-value="<?php echo $GLOBALS['event_path'];?>" href="#">View</a> </td>
	</tr>
	</tbody>


<?php		
	}
?>

<?php

	
	$query="SELECT userID from users where email='".$_SESSION['sess_user']."'";
	$row=mysqli_fetch_array($db->selectData($query));
	$query="SELECT * from users_events INNER JOIN events ON (users_events.event_id=events.event_id) where users_events.user_id='". $row['userID'] ."'";
	$ans=$db->selectData($query);
	while($result=mysqli_fetch_array($ans))
	{
		$event_name=$result['event_name'];
		$event_path=$result['content_path'];
		$event_domain=$result['event_domain'];
		$time=$result['timestamp'];
		echo "<tr>";
		display();
		echo "</tr>";
	}
?>

<?php
	$db->disconnect();
?>
</table>