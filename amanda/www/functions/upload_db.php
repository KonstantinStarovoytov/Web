<?php
	$name = htmlspecialchars($_POST['iPhName']);
	$disctiption = htmlspecialchars($_POST['discr']);
	$path = htmlspecialchars($_POST['path']);
	$mysqli = false;
	if($name != "" && $disctiption != "" && $path != ""){
		echo $name.$disctiption.$path;
	    addImage ();
	}
	
	else 
	echo "usage: error here, path name and descr are empty";
		
	

		
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli("localhost","id3207432_amanda","Woodward7&8","id3207432_images");
		$mysqli->query("SET NAMES 'utf8'");
		
	}

	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}

function addImage () {
		global $mysqli, $name, $disctiption, $path;
		
		connectDB();
		           
           $result = $mysqli->query("INSERT INTO `images` (`name`, `disctiption`, `path`) VALUES ('$name', '$disctiption' , '$path')");
           
           if($result)
          echo "success";
          else 
          echo "usage: insert DB error ";
          
        
			
		closeDB();
		

	}

	

?>