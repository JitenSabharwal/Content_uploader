<?php
require_once("../include/inrlink.php");
$record=$_GET['record'];
?>

<html>
	<title>
		Content
	</title>
	<script>
		var app=angular.module("myApp",[]);
		app.controller('myCtrl',function($scope,$http){
			alert("<?php echo $record;?>");
			//$http.get("")
		});
	</script>
	<body>
		<h3>Check the view</h3>
		<div class="row"  ng-app="myApp" ng-controller="myCtrl">
			    <div class="col s12">
			        <ul class="tabs" tabs>
			            <li class="tab col s3"><a href="#test1">Introduction</a></li>
			            <li class="tab col s3"><a class="active" href="#test2">Rounds</a></li>
			            <li class="tab col s3"><a href="#test3">Rules</a></li>
			            <li class="tab col s3"><a href="#test4">Contact</a></li>
			        </ul>
			    </div>
			    <div id="test1" class="col s12">Test 1</div>
			    <div id="test2" class="col s12">Test 2</div>
			    <div id="test3" class="col s12">Test 3</div>
			    <div id="test4" class="col s12">Test 4</div>
		</div>

	</body>
</html>