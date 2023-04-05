<?php

class User{

    private $isim;
    private $soyisim;

    public function __construct($isim, $soyisim)
    {
        $this->isim = $isim;
        $this->soyisim = $soyisim;
    }

    public function __destruct()
    {
        $this->isim = null;
        $this->soyisim = null;
    }

    public function isimYaz(){
        return $this->isim.' '.$this->soyisim;
    }

}
$User = new User('Recep', 'MERT');

echo $User->isimYaz();