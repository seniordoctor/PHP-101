<?php

session_start();

//isset bir değişkenin var olup olmadığını kontrol eder.
if (isset($_SESSION['kullanici']['isim'])){
    echo 'Merhaba '. $_SESSION['kullanici']['isim']. ' hoş geldiniz.';
    echo "<pre>";
    print_r($_SESSION);
}else{
    echo 'Lütfen oturum açın';
}