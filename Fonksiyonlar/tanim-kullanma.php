<?php


/*
function fonksiyon_adi()
{
    komut...;
}

fonksiyon_adi();
*/

function selamla()
{
    return 'Selam, nasılsın?';
}

$donen_deger = selamla();

echo $donen_deger;

// Ekran Çıktısı
// Selam, nasılsın?

/* parametre ekleme;

function fonksiyon_adi($parametre)
{
    echo $parametre;
}

*/

echo '<br>';
echo '<br>';

function topla($sayi1, $sayi2 = 30) // sayi2'ye deger verilmezse default olarak 30 alacak
{
    return $sayi1 + $sayi2;
}
echo topla(10, 20);
echo '<br>';
echo topla (10);
// Ekran Çıktısı
/*
30
40
 */