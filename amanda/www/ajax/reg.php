<?php
	$login = $_POST['login'];
	$pass = htmlspecialchars($_POST['pass']);
	$email = htmlspecialchars($_POST['email']);
	$mysqli = false;
	if($login != "" && $pass != "")
		
		echo "LOX";	
	
	
	else if ($email != "" && $login != "" && $pass != "") 
		registration();
		
	else echo "Error";

		
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli("localhost","root","","imagepreviewer");
		$mysqli->query("SET NAMES 'utf8'");
		
	}

	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}

	function registration () {
		global $mysqli, $login, $pass, $email;
		connectDB();		
		$mysqli->query("INSERT INTO `users` (`login`, `password`, `email`) VALUES ('$login', '$pass' , '$email')");		
		closeDB();

		

	}

	function autorization () {
		global $mysqli, $login, $pass, $email;
		connectDB();		
		if($mysqli->query("SELECT FROM `users` WHERE (login=$login AND password = $pass)"))
		$resutl = $mysqli->query("SELECT FROM `users` WHERE (login=$login AND password = $pass)");
		
		elseif (!$mysqli->query("SELECT FROM `users` WHERE login=$login AND password = $pass)")) {
				$result = 1;
				}
		elseif ($mysqli->query("SELECT FROM `users` WHERE login IS NULL AND password IS NULL)")) {
				$result = 0;
			}	
		closeDB();
		return $resutl;
		
		

		

	}

?>