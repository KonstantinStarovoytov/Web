<!DOCTYPE html>
<html lang="en">
<head>
	<?php
	require_once "ajax/reg_bd.php";
	?>
	<meta charset="UTF-8">
	<title>Registatin IP</title>
	<script src="/js/js_reg.js" defer></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="css/style_reg.css">
	<link href="images/if_camera_2628474.ico" rel="shortcut icon" type="image/x-icon" />
</head>
<body >
	<div class="loginForm" id="login_form">
	
		<div class="r_bar" id="singin">
		<h1 id="logo" align="center">Sign in</h1>
				<div class="form_inputs">
				    <input type="text" class="a_field" name="email" id="email" placeholder="Enter your email" hidden><span class="validation" id="validemail"></span>

			    </div>
			    <div class="form_inputs">
				    <input type="text" class="a_field" name="login" id="login" placeholder="Enter your login">
				    <span class="validation" id="validlogin"> </span>
			    </div>
			    <div class="form_inputs">
				    <input type="password" class="a_field" name="pass" id="pass" placeholder="Enter your password">
				    <span class="validation" id="validpass"></span>
			    </div>
			    <div class="form_inputs">
				    <input type="password" class="a_field" name="repass" id="repass" placeholder="Retype your password" hidden>
				    <span class="validation" id="validrepass"></span>
			    </div>		
			    <input type="button" value="Login" id="sI_button" />
			<div class="sUp">
			Don't have an account? <span id="sUp" align="center">Sign Up</span><span id="sIn" align="center">Sign In</span>
			</div>

	</div>

</body>
</html>