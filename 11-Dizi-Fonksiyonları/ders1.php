<?php

/*
print_r();
Bir değişkenin veya dizinin gösterimini ekrana basar.

var_dump();
Bu işlev bir değişkenin türü ve değeri dahil değişkenle ilgili bilgileri gösterir.
Diziler ve nesneler ardışık olarak bileşenlerine ayrılarak tüm yapısı değerleriyle birlikte gösterilir.

explode();
Bir dizgeyi bir ayraca göre bölüp bir dizi haline getirir

implode();
Dizi elemanlarını birleştirip bir dizge elde eder.

count();
Bir dizideki eleman sayısını veya bir nesnedeki şeylerin sayısını döndürür.

is_array();
Değişkenin bir dizi içerip içermediğine bakar
*/

$arr = [
    1, 2, 3, 4, 5, 6, 7, 8, 9
];
/*
print_r($arr."<br>");
echo '<br>';

var_dump($arr.'<br>');
echo '<br>';

$dizge = implode( ' - ', $arr);
print_r($dizge);
echo '<br>';

$newArr = explode(' ', $dizge);
echo '<br>';
print_r($newArr);
echo '<br>';

echo count($arr);
echo '<br>';
*/

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$arr2 = 'asdasd';

/*
for ($i = 0; $i <= count($arr) -1; $i++){
    echo $arr[$i]."<br>";
}
*/

//echo gettype(is_array($arr2));

if (is_array($arr2)){
    echo 'Bu bir dizidir';
}else{
    echo  'Bu bir dizi içermiyor';
}