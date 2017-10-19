<?php
    $iPhName = htmlspecialchars($_POST['iPhName']);
	$discr = htmlspecialchars($_POST['discr']);
    $filename;
    echo $filename;
     /* Отключаем вывод ошибок */
    define ("MAX_SIZE","2000"); /* 2MB максимальный размер загружаемого файла */
    function getExtension($str) { /* Определяем формат файла */
        $i = strrpos($str,".");
        if(!$i) { return ""; }
        $l = strlen($str) - $i;
        $ext = substr($str,$i+1,$l);
        return $ext;
    }
    /* Разрешенные форматы для файлов, при желании можно добавить свои */
    $valid_formats = array("jpg", "png", "gif", "bmp","jpeg");
    if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {
        $uploaddir = "../uploads/"; /* Папка для загрузки изображений */
        foreach ($_FILES['inputFile']['name'] as $name => $value) {
            $filename = stripslashes($_FILES['inputFile']['name'][$name]);
            $size = filesize($_FILES['inputFile']['tmp_name'][$name]);
            $ext = getExtension($filename);
            $ext = strtolower($ext);
            if(in_array($ext,$valid_formats)) {
                /* Проверка размера файла */
                if($size < (MAX_SIZE*1024)) { 
                    $image_name=time().$filename; 
                    echo "<img src='".$uploaddir.$image_name."' class='previev'>"; 
                    $newname=$uploaddir.$image_name; 
                    /* Сохраняем файл */
                    if(move_uploaded_file($_FILES['inputFile']['tmp_name'][$name], $newname)) { 
                        $time=time();
                        echo "успех".$discr.$iPhName;
                        $GLOBALS['filename'] = $newname;
                        /* Добавляем инфомацию в базу */
                        //mysqli_query($dbh, "INSERT INTO user_uploads(image_name, user_id_fk, created) VALUES//('{$image_name}', '{$session_id}', '{$time}')");
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