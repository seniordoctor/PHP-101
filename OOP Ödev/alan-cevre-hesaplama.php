<?php

class Sekil
{
    // Özellikleri tanımladık.
    protected $uzunluk;
    protected $genislik;

    public function __construct($uzunluk, $genislik)
    {
        $this->uzunluk = $uzunluk;
        $this->genislik = $genislik;
    }

    public function alan()
    {
        return $this->uzunluk * $this->genislik;
    }

    public function cevre()
    {
        return 2 * ($this->uzunluk + $this->genislik);
    }
}

class Dikdortgen extends Sekil
{
    //Sekil'in özellikleri ile alan ve cevresi bulunduğu için ekstra özellik eklemesi yapmadık.
}

class Ucgen extends Sekil
{
    public function __construct($uzunluk, $genislik)
    {
        parent::__construct($uzunluk, $genislik);
    }
    public function alan()
    {
        return ($this->uzunluk * $this->genislik) / 2;
    }

    public function cevre()
    {
        $hipotenus = sqrt(pow($this->uzunluk, 2) + pow($this->genislik, 2));
        return $this->uzunluk + $this->genislik + $hipotenus;
    }
}

class Kare extends Sekil
{
    public function __construct($uzunluk)
    {
        parent::__construct($uzunluk, $uzunluk);
    }
}

$dikdortgen = new Dikdortgen(4, 5);
echo 'Dikdörtgen alanı: '.$dikdortgen->alan().", Çevresi: ".$dikdortgen->cevre()."<br>";
echo "<br>";

$ucgen = new Ucgen(3,4);
echo 'Üçgen alanı: '.$ucgen->alan().", Çevresi: ".$ucgen->cevre()."<br>";
echo "<br>";

$kare = new Kare(5);
echo 'Kare alanı: '.$kare->alan().", Çevresi: ".$kare->cevre()."<br>";

