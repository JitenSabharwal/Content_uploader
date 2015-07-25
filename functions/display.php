<?php
	require_once("../include/inrlink.php");
	
	$record=$_GET['record'];
	$head=$_GET['head'];
	
	$jsondata = file_get_contents("../".$record);
	$data=json_decode($jsondata, true);
	$id1 = $data[$head][0]['intro'];
	$id2 = $data[$head][0]['rules'];
	$id3 = $data [$head][0]["rounds"];
	$id4 = $data [$head][0]["round_Details"];
	$id5 = $data [$head][0]["Co_ordinator"];
	$id6 = $data [$head][0]["Co_ordinator_number"];

?>

<html>
	<title>
		Content
	</title>
	<body>
		<h3>Check the view</h3>
		<div class="row"  ng-app="myApp" ng-controller="myCtrl">
			    <div class="col s12">
			        <ul class="tabs" tabs>
			            <li class="tab col s3"><a class="active" href="#intro">Introduction</a></li>
			            <li class="tab col s3"><a  href="#round">Rounds</a></li>
			            <li class="tab col s3"><a href="#rules">Rules</a></li>
			            <li class="tab col s3"><a href="#cord">Contact</a></li>
			        </ul>
			    </div>
			    
			    <div id="intro" class="col s12">
			    		<p>
			    			<?php echo $id1;?>
			    		</p>
			    </div>

			    <div id="round" class="col s12">
				    	<table class="hoverable">
				    	<p>

				    		<?php 
				    			$round=explode(",",$id3[0]);
				    			$round_Details=explode(",",$id4[0]);
				    			$c=count($round);
				    			//echo $c;
				    			for($i=0;$i<$c-1;$i++)
				    			{
				    				echo "<tr><td><span><b>".$round[$i]."</b></span></td>";
				    				echo "<td><p>".$round_Details[$i]."</p></td></tr>";
				    			}
				    			
				    		 ?>
				    	</p>
				    </table>
				    			    
			    </div>
			    
			    <div id="rules" class="col s12">
			    	<table class="hoverable">
			    	<?php
			    	$rules=explode(",",$id2[0]);
			    	$c=count($rules);
			    	for($i=0;$i<$c-1;$i++)
			    	{
			    		echo "<tr><td><li>".$rules[$i]."</li></td></tr>";
			    	}
			    	?>
			    </table>
			    </div>
			    
			    <div id="cord" class="col s12">
			    	
			    	<table class="hoverable bordered">
			    		<tr>
			    			<th>Co-ordinator Name</th><th>Contact</th>
			    		</tr>
			    	<?php 
			    		$cord=explode(",",$id5[0]);
			    		$cord_num=explode(",",$id6[0]);
			    		$c=count($cord);
				    	for($i=0;$i<$c-1;$i++)
				    	{
				    		echo "<tr><td>".$cord[$i]."</td><td>".$cord_num[$i]."</td></tr>";	
				    	}
				    	?>
			    	<tr>
			    		<td></td>
			    	</tr>
			    	
			    	</table>
			    </div>
		</div>

	</body>
</html>