<?php

#set cookie:
setcookie("username","shibanondo das",time() + 86400,"/");

echo $_COOKIE['username']."<br/>";

#session start:
session_start();

#set data on session
$_SESSION['email'] = "abc123@gmail.com";

#access data from sesson:
echo $_SESSION['email'];

#kill session:
session_unset();
session_destroy();


?>