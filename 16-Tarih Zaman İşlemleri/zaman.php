<?php

/* Tarih Zaman Îșlemleri
Karakter        Açıklama                                                Örnek
s               Sıfırlı şekilde iki haneli saniye değeri                07
i               İki haneli dakika değeri                                05
H               İki haneli 24 saat biçiminde saat değeri                00 ile 23 arası
d               İki haneli gün değeri                                   01 ile 31 arası
m               İki haneli ay değeri                                    01 ile 12 arası
Y               4 haneli yıl değeri                                     2017
j               Tek haneli gün değeri                                   4
n               Tek haneli ay değeri                                    1 ile 12 arası
y               İki haneli yıl değeri                                   18, 96
l               Gün ismi                                                Saturday
F               Ay isimleri                                             February
z               Yılın günü                                              0 ile 365 arası

date_default_timezone_set();
date();
time();
strtotime();
*/

// Manuel - İngilizce olan ayları Türkçe karşılığına çevirme fonksiyonu ve kullanım;
/*
function _date($date){

    $date_en = [
        'January',
        'February',
        'March',
        'April',
        'May',
        'June',
        'July',
        'August',
        'September',
        'October',
        'November',
        'December',
    ];
    $date_tr = [
        'Ocak',
        'Şubat',
        'Mart',
        'Nisan',
        'Mayıs',
        'Haziran',
        'Temmuz',
        'Ağustos',
        'Eylül',
        'Ekim',
        'Kasım',
        'Aralık',
    ];

    return str_replace($date_en, $date_tr, $date);
}
date_default_timezone_set('Europe/Istanbul');
//$format = 'Y-m-d H:i:s';
$format = 'l F z';
echo _date(date($format));
*/

date_default_timezone_set('Europe/Istanbul');
// 1 Ocak 1970'den bu güne kadar geçen saniye
//echo time();
echo "<br>";

// 1 Ocak 1970'den bu güne kadar geçen saniye + 1 hours
//$unix = strtotime('+1 hours');
echo "<br>";

//echo date('Y-m-d H:i:s', $unix);
echo "<br>";


$DateTime = new DateTime('+1 month');
echo $DateTime->format('Y-m-d H:i:s');
