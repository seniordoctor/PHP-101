<?php


/*

 * public
Her yerden erişilebilir.

 * private
Sadece sınıf içerisinden erişilebilir.

 * protected
Dışarıdan erişilemez.
sınıf içinden erişilebilir.
Miras alma yoluyla kullanılabilir.

*/

class User{

    public $isim;
    private $soyisim;
    protected $konum;


    public function getIsim()
    {
        return $this->isim;
    }

    public function setIsim($isim)
    {
        $this->isim = $isim;
    }

    public function getSoyisim()
    {
        return $this->soyisim;
    }

    public function setSoyisim($soyisim)
    {
        $this->soyisim = $soyisim;
    }

    public function getKonum()
    {
        return $this->konum;
    }

    public function setKonum($konum)
    {
        $this->konum = $konum;
    }



}


$User = new User();

$User->setIsim('Recep');
$User->setSoyisim('MERT');
$User->setKonum('İstanbul');

echo $User->getIsim()."<br>";
echo $User->getSoyisim()."<br>";
echo $User->getKonum()."<br>";



// soyisim private olduğu için hata verektir.
// echo $User->soyisim;

