<?php

/*
 * Fonksiyonların içerisinde tanımladığın değişkenler dışarıya gönderilmez ve aynı şekilde dışarıda tanımladığın bir değişken fonksiyon içinde görülmez.


 * function isim(){
 * $isim = 'Recep';
 * }
 * deneme();
 * echo $isim;
 *
 * Bu kodu çalıştırdığımızda PHP yalnızca isim adında bir değişken olmadığı için hata verir.

$isim = 'Recep';
function isim() {
   global $isim;
   return $isim;
}
echo deneme();
// Ekran çıktısı
Recep
global komutuyla dışarıda ki bir değişkeni fonksiyon içerisinde tanımlayıp kullanabiliriz.
 */