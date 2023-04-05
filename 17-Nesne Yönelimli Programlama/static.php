<?php

//  fonksiyonlarda kullanımı:
/*
function say(){

    // static olarak belirlenmez ise sayı artarak devam etmez sürekli sıfırlanır.
    static $sayi;
    echo $sayi;
    $sayi++;
}

say();
say();
say();
say();
say();
say();
*/

class User{

    public static $isim;

    public $soyisim;

    public static function setIsim($isim)
    {
        // static method içinde this değil self kullanıyoruz. Self ile sadece static ile tanımlı olanlara erişirim.
        self::$isim = $isim;
    }
    public static function getIsım(){
        return self::$isim;
    }
}

User::setIsim('Recep MERT');
echo User::getIsım();


/*
User::$isim = 'Recep';
echo User::$isim;
//User::setIsim('Recep MERT');
$User = new User();
$User->soyisim = 'MERT';
echo User::$isim;
*/

