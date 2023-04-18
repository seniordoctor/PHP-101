<?php
//ini_set('display_errors', true);
//error_reporting(0);
//echo phpinfo();

//echo $isim;
//echo $_GET['isim'];

//echo $_GET['isim'] ?? '';


error_reporting(0);
class MyError extends Exception{
//$message
//$code
//$file
//$line
    public function Bomb() {

        echo "<div style='width: 100%; padding: 30px; background: #111111; color: aqua;'>";
            echo $this->message."<br>";
            echo $this->code."<br>";
            echo $this->file."<br>";
            echo $this->line."<br>";
        echo "<div>";

    }
}

/*
try {
    //DB
    throw new MyError('Bu bir hatadır!');
}catch (MyError $exception){
    echo $exception->Bomb();
}*/

function errHandler($no, $msg, $file, $line){
    include 'error.php';
}
function fatalErrorHandler(){
    $error = error_get_last();
    errorHandler($error["type"],$error["message"],$error["file"],$error["line"]);
    //echo 'Patladık!';
}

set_error_handler('errHandler',E_ALL);
register_shutdown_function('fatalErrorHandler');

echo $isim;
selam();
echo $isim;