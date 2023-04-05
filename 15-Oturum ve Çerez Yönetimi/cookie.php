<?php

// name: isim value: Recep olan (x) saniye geçerli olacak bir cookie oluşturur.
/*

setcookie('isim','Recep', time()+ (86400 * 2));

echo "<pre>";

print_r($_COOKIE);
*/

/*
setcookie(
  $name,
  $value,
  $time,
  $path,
  $domain,
  $secure,
  $http_only,
);
*/


//http_only: true olursa javascript kodu ile cookie bilgileri çekilemez.
/*
setcookie(
    'theme',
    'dark',
    time() + 86400,
    '/',
    'localhost',
    false,
    true
);

print_r($_COOKIE);
*/


















/*
$name : Cookie’nin ismidir. Cookie bu isim üzerine çağırılır.

$value : Cookie değeridir.

$time : Tarayıcı üzerinde aktif olacağı saniye cinsinden tutulan cookie süresidir.
        Bir değer verilmez ise tarayıcı kapandığında cookie silinir,
        tarayıcı açık kaldığı süre içerisinde aktif olur. Zaman değeri,
        şu anki zaman + aktif olacağı süre şeklinde verilebilir. (örnek: time() + 60 //60 saniye)

$path : Sitede hangi dizin içerisinde çalışması gerektiğini belirtir.
        Bütün sitede aktif olunması istenir ise ” / ” değeri girilir.

$domain : Cookie’nin çalıştığı site içerisinde hangi alt domain üzerinde çalışacağını belirtir.
          Yazılmaz ise çalıştığı sitedeki ana domain baz alınır, tüm site üzerinde etkili olur.

$secure : True olarak aktif edilir ise sadece HTTPS bağlantılarda PHP çerez kullanımı gerçekleşir.
          Cookie güvenliği arttırma işlemi için kullanılır.
          Çerez bilgisi sadece https bağlantısı ile alınacağı belirtilir.

$http_only : True olarak kullanımı aktif edilir ise cookie sadece sunucu üzerinden erişilebilir olacaktır.
             Javascript ile tarayıcı üzerinde cookie düzenlenemeyecektir.
 */