<?php

class Television{
    const tv_message = "Thank You For Watching Tv!";

    function tv(){
        return self::tv_message;
    }
}

// echo Television::tv_message;
$tvBarta = new Television();
echo $tvBarta->tv();


?>