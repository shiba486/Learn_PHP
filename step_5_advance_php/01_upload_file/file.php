<?php

print_r($_FILES['file_upload']);
if($_FILES['file_upload']){
    $path = $_FILES['file_upload']['name'];
    $upload_path = "./upload/".$path;

    if(move_uploaded_file($_FILES['file_upload']['tmp_name'],$upload_path) OR die("Failed to upload file")){
        echo "File uploaded Successfully";
    }else{
        echo "Please Try again!";
    }
}

?>