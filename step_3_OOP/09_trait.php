<?php

trait programming_language1{
    public function php(){
        echo "Learn PHP to use Larravel Framework!";
    }
}

class learnPHP{
    use programming_language1;
};


$lang1 = new learnPHP();
$lang1->php();



trait programming_language2{
    public function python(){
        return "Learn PYTHON to use Django Framework!";
    }
}

trait programming_language3{
    public function javascript(){
        return "Learn Javascript to use Nodejs/Express Framework!";
    }
}


class learnPython{
    use programming_language2;
}
class learnJavascript{
    use programming_language3;
}



$lang2 = new learnPython();
echo $lang2->python();

$lang3 = new learnJavascript();
echo $lang3->javascript();





?>