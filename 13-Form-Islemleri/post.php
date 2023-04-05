<?php
// errorları yakalamak için error_reporting kullanıyoruz
error_reporting(E_ALL);

// $_POST süper global'i dizi şeklinde gönderdiğimiz verileri tutar.
/*
    echo $_POST['isim'];
    echo "<br>";
    echo $_POST['soyisim'];
*/

//Verilerin başında ve sonundaki boşlukları trim fonksiyonu ile temizleriz.
/*
    $isim = trim($_POST['isim']);
    $soyisim = trim($_POST['soyisim']);
    echo $isim. ' '.$soyisim;
*/

// form'dan gelen verileri trim ile kontrolden geçirecek bir fonksiyon; (array_map: dizinin içindeki bütün elemanları döner)

    function filtre($p){
        return is_array($p) ? array_map('filtre', $p) : htmlspecialchars(trim($p));
    }

    $dizi = array_map('filtre',
        // htmlspecialchars: form'da html komutlarını ekarte eder (güvenlik zafiyeti için)
        //return htmlspecialchars(trim($e));
    $_POST);

    echo "<pre>";
    print_r($dizi);




?>