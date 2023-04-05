<?php
/*
 * $a = array('elma','armut')
 * $a = ['elma','armut']
 * Dizileri print_r(dizi) veya var_dump(dizi) şeklinde ekrana yazdırabiliriz.
 *
 */
// Diziler

$isimler = array('Recep', 'Naz', 'Nehir', 'Mert');
$isimler2 = [];

print_r($isimler);


$kisi = [
    'isim' => 'Recep',
    'soyisim' => 'MERT',
    'dogumtarihi' => '01.01.2001'
];
echo "<br>";
echo "<br>";

print_r($kisi);

echo "<br>";
echo "<br>";
/*
//İfadenin çıktısı

Array(
    [isim] => Recep
    [soyisim] => MERT
[dogumtarihi] => 01.01.2001
    )
*/

    echo "Merhaba benim adım " . $kisi['isim'] . " " . $kisi['soyisim'] . "  Doğum tarihim " . $kisi['dogumtarihi'];
$hayvanlar = array('kedi', 'köpek', 'tavşan');
/*
    //İfadenin çıktısı
    Merhaba benim adım Şahin ERSEVER  Doğum tarihim 10.01.1993
*/
echo "<br>";
echo "<br>";

    echo $hayvanlar[0];
         echo "<br>";// "kedi" Çıktısını verir.
    echo $hayvanlar[1];
        echo "<br>";// "köpek" Çıktısını verir.
    echo $hayvanlar[2];
        echo "<br>";// "tavşan" Çıktısını verir.