<?php
if(isset($_POST['submit'])) {
    $number = $_POST['number'];
    if(empty($number)) {
        echo "Lütfen bir sayı girin!";
    } else {
        $result = checkNumber($number);
        if($result === true) {
            echo "Girdiğiniz sayı 3'e tam bölünebilir.";
        } else {
            echo "Girdiğiniz sayı 3'e tam bölünebilemez. En yakın 3'e tam bölünebilen sayı: " . $result;
        }
    }
}

function checkNumber($num) {
    if($num % 3 == 0) {
        return true;
    } else {
        return (3 * ceil($num / 3));
    }
}
?>

