<?php

// print_r($_FILES);

if($_FILES['uploadFile']){
    $path = $_FILES['uploadFile']['name'];
    $upload_path = "./uploads/".$path;

   if( move_uploaded_file($_FILES['uploadFile']['tmp_name'],$upload_path) || die("failed to upload file!")){
    echo "File uploaded successfully";
   }else{
    echo "Failed to upload";
   }
    // echo $upload_path;
}

?>