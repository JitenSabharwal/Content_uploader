<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Webarch Form Registration</title>
		<?php
			include_once('include/links.php');
		?>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>

	<div class="container row">
		<div class="col l12 m12 s12">&nbsp;</div>

		<form action="json.php" onsubmit="retrun false" method="POST" class="col l12 m12 s12">
			<div class="input-field col l2 m2 hide-on-small-only">&nbsp;</div>
			<div class="input-field col l8 m8 s12">
				<input id="heading" type="text" name="heading" class="heading" required >
	        	<label for="heading">Enter Event Name </label>
			</div>
			<div class="input-field col l2 m2 hide-on-small-only">&nbsp;</div>

			<div class="input-field col l6 m6 s12">
			    <select>
			    	<option value="" disabled selected>Choose your option</option>
			    	<option value="intro">Introduction</option>
			    	<option value="rules">Rules</option>
			    	<option value="rounds">Rounds</option>
			    	<option value="contact">Coordinators</option>
			    </select>
			</div>

			<div class="input-field col l6 m6 s12">
				<div class="intro content card">
					<textarea id="intro" class="materialize-textarea introText" name="intro" placeholder="Introduction" required></textarea>
				</div>

				<div class="rules content">
					<div class="rulewrap">
						<textarea class="materialize-textarea rulesName" name="rule[]" placeholder="Enter Rule" required></textarea>
					</div>

					<center>
						<a class="addrules btn waves waves-effect"><i class="fa fa-plus-circle"></i> New Rule</a>
					</center>
				</div>

				<div class="rounds content">
					<div class="roundWrap">
						<div class="card">
							<input type="text" name="r[]" placeholder="Round Name" class="roundName" required>
							<textarea class="materialize-textarea roundDetails" name="rt[]" placeholder="Round Details" required></textarea>
						</div>
					</div>

					<center>
						<a class="addround btn waves waves-effect"><i class="fa fa-plus-circle"></i> New Round</a>
					</center>
				</div>

				<div class="contact content">
					<div class="contactWrap">
						<div class="card">
							<input type="text" name="c[]" placeholder="Co-ordinator Name" class="cName" required>
							<input type="text" name="cp[]" placeholder="Contact Number" class="cContact" required>
						</div>
					</div>

					<center>
						<a class="addcontact btn waves waves-effect"><i class="fa fa-plus-circle"></i> Add More Co-Ordinators</a>
					</center>
				</div>
			</div>


			<div class="col l12 m12 s12">
				<br><br>
				<center>
					<a class="btn center waves waves-effect nextStep">Next Step <i class="fa fa-angle-right"></i></a>
				</center>
			</div>
	    </form>
	    <div class="col l3 m3 s12">&nbsp;</div>
	</div>
		
	</body>
</html>