<?php


$myFile1 = fopen("newFile.txt","w") or die("unable to write the file!");
$text = "This is a new file.";

fwrite($myFile1,$text);

fclose($myFile1);




?>