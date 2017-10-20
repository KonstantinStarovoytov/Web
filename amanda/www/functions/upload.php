<?php
    $iPhName = htmlspecialchars($_POST['iPhName']);
	$discr = htmlspecialchars($_POST['discr']);
    $filename;
    echo $filename;
    
    define ("MAX_SIZE","2000"); /* 2MB max size */
    function getExtension($str) { 
        $i = strrpos($str,".");
        if(!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }
    
    $valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
        $uploaddir = "../uploads/"; // upload folder location on server
        foreach ($_FILES['inputFile']['name'] as $name => $value) {
            $filename = stripslashes($_FILES['inputFile']['name'][$name]);
            $size = filesize($_FILES['inputFile']['tmp_name'][$name]);
            $ext = getExtension($filename);
            $ext = strtolower($ext);
            if(in_array($ext,$valid_formats)) {
                
                if($size < (MAX_SIZE*1024)) { 
                    $image_name=time().$filename; 
                    echo "<img src='".$uploaddir.$image_name."' class='previev'>"; 
                    $newname=$uploaddir.$image_name; 
                    
                    if(move_uploaded_file($_FILES['inputFile']['tmp_name'][$name], $newname)) { 
                        $time=time();
                        echo "success";
                        $GLOBALS['filename'] = $newname;
                        
                    } else { 
                        echo '<span class="imgList">Ошибка! Файл слишком велик1!</span>'; 
                    } 
                } else { 
                    echo '<span class="imgList">Ошибка! Файл слишком велик2!</span>'; 
                } 
            } else { 
                echo '<span class="imgList">Данный формат запрещен3!</span>'; 
            } 
        } 
    } 
?>