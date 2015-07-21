<?php
include "../login/login_status.php";
?>
<?php
function table($val)
{
	echo "<tr>";
		echo "<td>".$val."</td>";
		echo "<td>".$val."</td>";
		echo "<td>".$val."</td>";
		echo "<td><button value='$val'>Update</button></td>";
	echo "</tr>";
}
?>
<!DOCTYPE HTML>
<html>
	<body >
		<table class="content" border=5 >
			<tr>
				<th>Sno.</th>
				<th>Event Name</th>
				<th>Domain</th>
				<th>Time of Creation</th>
				<th>Update</th>
			</tr>
			<?php
				table(10);
			?>
		</table>
	</body>
</html>