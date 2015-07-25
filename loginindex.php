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
	<?php
		include_once('./include/loginheader.php');
	?>

	<div class="container row">
		<div class="col l12 m12 s12">&nbsp;</div>

		<div class="col l3 m3 s12">&nbsp;</div>
		
		<form action="" method="POST" name="loginform" class="col l6 m6 s12">
			<div class="input-field">
	          <input id="username" type="email" name="login" required >
	          <label for="username">Username</label>
	        </div>

	        <div class="input-field">
	          <input id="password" type="password" name="password" required pattern="[A-Za-z$_/-0-9]+">
	          <label for="password">Password</label>
	        </div>
	        <center>
	        	<button type="submit" onclick="return verify()" name="action" class="btn waves waves-effect waves-light">Submit</button><br><br>
	        	<h6><a href="register.php">Don't Have account? Register Here.</a></h6>
	        </center>
	    </form>

	    <div class="col l3 m3 s12">&nbsp;</div>
	</div>
		
	</body>
</html>