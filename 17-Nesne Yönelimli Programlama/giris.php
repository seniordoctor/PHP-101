<?php

class User{
    /*public $isim = 'Recep';
    public $toplam;
    const YAS = 22;
    public function isimYaz(){
        return $this->isim;
    }*/
    /*public function topla($num1, $num2){
       $this->toplam = $num1+$num2;
    }*/

    public $isim;
    public $soyisim;
    public $eposta;
    public $yas;

    public function addUser($isim,$soyisim,$eposta,$yas){
        $this->isim = $isim;
        $this->soyisim = $soyisim;
        $this->eposta = $eposta;
        $this->yas = $yas;
    }

}

$User = new User();

$User->addUser('Recep', 'MERT', 'recepmert@gmail.com', 22);

echo 'Merhaba benim adım '. $User->isim;
echo "<br>";
echo 'Soyadım '.$User->soyisim;
echo "<br>";
echo 'Mail adresim '.$User->eposta;
echo "<br>";
echo 'Yaşım '.$User->yas;
echo "<br>";


/*
$User = new User();

$User->topla(10,20);
echo $User->toplam;

sabiti aşağıdaki şekilde çağırabiliriz.
echo User::YAS;
*/