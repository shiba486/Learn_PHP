<?php

$fileAppend = fopen("newFile.txt","a") or die("unable to append data!");
$newData = "This is demo data for append.";

fwrite($fileAppend,$newData);

fclose($fileAppend);



?>