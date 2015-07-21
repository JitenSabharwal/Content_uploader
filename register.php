<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<title>Webarch Form Registration</title>
		<?php
			include_once('./include/links.php');
		?>
		<!--[if IE]>
  		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
	</head>
	<body>
	<div class="se-pre-con"></div>
	<?php
		include_once('./include/registerheader.php');
	?>

	<div class="container row">
		<div class="col l12 m12 s12">&nbsp;</div>

		<form  name="registerform" method="POST" class="col l12 m12 s12">
			
			<div class="input-field col l6 m6 s12">
	          <input id="firstName" type="text" name="firstName">
	          <label for="firstName">First Name</label>
	        </div>

	        <div class="input-field col l6 m6 s12">
	          <input id="lastName" type="text" name="lastName">
	          <label for="lastName">Last Name</label>
	        </div>

	        <div class="input-field col l6 m6 s12">
	          <input id="regNo" type="text" name="regNo">
	          <label for="regNo">Registration Number</label>
	        </div>

	        <div class="input-field col l6 m6 s12">
	          <input id="domain" type="text" name="domain">
	          <label for="domain">Domain</label>
	        </div>

	        <div class="input-field col l6 m6 s12">
	          <input id="username" type="email" name="email">
	          <label for="username">Email</label>
	        </div>

	        <div class="input-field col l6 m6 s12">
	          <input id="password" type="password" name="password">
	          <label for="password">Password</label>
	        </div>

	        <center>
	        	<button type="submit" name="action" onclick="return registerme()" class="btn waves waves-effect waves-light">Submit</button><br><br>

	        	<h6><a href="index.php">Already Have Account? Sign-in Here.</a></h6>
	        </center>
	    </form>

	    <div class="col l3 m3 s12">&nbsp;</div>
	</div>
		
	</body>
</html>