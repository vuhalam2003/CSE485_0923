<?php
$targetDir = "assets/uploads/";
$targetFile = $targetDir.basename($_FILES["myfile"]["name"]);

if(file_exists($targetFile)){
    echo "file existed"
}else{
    if (move_uploaded_file($_FILES["myfiles"]["tmp_name"], $targetFile))
}