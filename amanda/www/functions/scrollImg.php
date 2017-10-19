<?php

if(isset($_GET['num'])){
    $num = $_GET['num'];
}
    echo $num;
	getImage($num );
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

	function getImage ($num) {
		global $mysqli,$num;
		connectDB();		
 		
		$result = $mysqli->query("SELECT * FROM `images` ORDER BY `id` DESC LIMIT $num, 8");
		closeDB();		
		if(mysqli_num_rows($result) > 0)
		{          
        $image = $result->fetch_assoc();
        do 	{
          		$num++;
          		
          		printf('<li>
				<div class="image">
				<a href="#" title=""><img src="%s" alt="" /></a>
				</div>	
			    </li>',$image["path"]);
			}
			while($image = $result->fetch_assoc());
          sleep(1); 
     	}
     	else{
           echo 0; //Если записи закончились
     }

} ?>