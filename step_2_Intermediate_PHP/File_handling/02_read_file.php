<?php

/*
fopen() opens the file.

fread() reads the file (needs file size).

fclose() closes the file.

*/


$myFile = fopen("demo.txt","r") or die("File not Exist!");
echo fread($myFile,filesize("demo.txt"));
fclose($myFile);




?>