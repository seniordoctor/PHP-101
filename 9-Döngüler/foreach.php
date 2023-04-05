<?php

/*
 * İki sözdizimi mevcuttur:
foreach ($dizi as $değer){
    //Döngü
}

foreach ($dizi as $anahtar => $değer){
    //Döngü
}
 */

$isimler = [
    'isim' => 'Recep',
    'soyisim' => 'MERT',
    'nick' => 'seniordoctor',
    'password' => '111111'
];

foreach ($isimler as $deger)
{
    echo $deger. '<br>';
}

echo '<br>';

foreach ($isimler as $anahtar => $deger)
{
    echo $anahtar. ' - '. $deger.'<br>';
}