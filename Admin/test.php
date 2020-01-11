<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$gdInfoArray = gd_info();
$version = $gdInfoArray["GD Version"];

//echo $version;

foreach ($gdInfoArray as $key => $value){
    //echo "Key = $key | Value = $value <br/>";
}

//copy image rotate it and save it
//$img = imagecreatefromjpeg($filename);
//$imgRotated = imagerotate($img,45,-1);
//imagejpeg($imgRotated,"",100);



?>


<form enctype="multipart/form-data" method="post" action="image_upload_script.php">
Choose your file here:
<input name="uploaded_file" type="file"/><br /><br />
<input type="submit" value="Upload It"/>
</form>