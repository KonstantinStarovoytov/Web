<?php
	$mysqli = false;
	function connectDB () {
		global $mysqli;
		$mysqli = new mysqli("localhost","id3207432_amanda","Woodward7&8","id3207432_images");
		$mysqli->query("SET NAMES 'utf8'");
		$mysqli->query("SET CHARACTER SET 'utf8'");
		$mysqli->query("SET SESSION collation_connection = 'utf8_general_ci'");
	}

	function closeDB () {
		global $mysqli;
		$mysqli->close ();
	}

	function getImage ($limit) {
		global $mysqli;
		connectDB();		
 
		$result = $mysqli->query("SELECT * FROM `images` ORDER BY `id` LIMIT $limit");		
		if(!$result) 
{ echo "Images excised"; }
		closeDB();
			return resultToArray ($result);

	}

	function resultToArray ($result) {
		$array = array();
		$i = 0;
		while (($row = $result->fetch_assoc()) != false) 
			{$array[$i] = $row;
		$i++;}
		return $array;
		
	}

?>
