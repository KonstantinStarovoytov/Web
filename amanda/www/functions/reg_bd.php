<?php
	$login = htmlspecialchars($_POST['login']);
	$pass = htmlspecialchars($_POST['pass']);
	$email = htmlspecialchars($_POST['email']);
	$mysqli = false;
	if($email == "" && $login != "" && $pass != ""){
		
	    autorization ();
	}
	
	else if ($email != "" && $login != "" && $pass != "") 
	    
		registration();
		
	

		
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli("localhost","id3207432_amanda","Woodward7&8","id3207432_images");
		$mysqli->query("SET NAMES 'utf8'");
		
	}

	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}

function registration () {
		global $mysqli, $login, $pass, $email;
		session_start();
		connectDB();
		  $checker = $mysqli->query("SELECT * FROM `users` WHERE email = '$email'");
          $num = mysqli_num_rows($checker); 
          if($num == 0)
         
           $result = $mysqli->query("INSERT INTO `users` (`login`, `pass`, `email`) VALUES ('$login', '$pass' , '$email')");
           $_SESSION['login'] = $login;
           if($result)
          echo "Vse proshlo kak po maslu";
          else 
          echo "Так себе";
          
        
			
		closeDB();
		

	}

	function autorization () {
			global $mysqli, $login, $pass, $email;
			session_start();
		connectDB();
		
          $result = $mysqli->query("SELECT * FROM `users` WHERE login = '$login' AND pass = '$pass'");
          
          if($result)
          $row = $result->fetch_assoc();
          $_SESSION['login'] = $login;
          header("Location: https://imageprv.000webhostapp.com/index.php");
        
			
		closeDB();


	}

?>