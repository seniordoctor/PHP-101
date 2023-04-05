<?php

//var_dump(file_exists('a')); // a adında bir dizin olduğu için true dönecektir.

//mkdir('Recep'); // Recep adında bir dizin oluşturacak.

/*
$dizin_adi = 'c/b/a';

// $dizin_adi dizini var mı?
if(file_exists($dizin_adi)){
    echo 'Bu dizin zaten var'; // var ise dönecek cevap
}else{
    // yok ise dizini oluştur, permissions ver.
    if (mkdir($dizin_adi, 0777, true)){
        echo 'Dizin oluşturuldu';
    }else echo 'Bir hata meydana geldi';
}
*/

/*
$dizin_adi = 'c';

if(file_exists($dizin_adi)){
    if (rmdir($dizin_adi)) echo 'Dizin başarıyla silindi';
}else{
    echo 'Böyle bir dizin mevcut değil';
}
*/

