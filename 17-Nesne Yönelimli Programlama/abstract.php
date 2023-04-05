<?php



/*
 * Özellikleri

Soyut methodlar ve sabitler içerebilir.
Normal methodlar, özellikler ve sabitler içerebilir.
public, protected ve private olarak tanım yapılabilir.
Aynı sınıf sadece bir abstract sınıftan türetilebilir.
 */



// bu sınıftan türetilecek sınıflar için şablon oluşturuyoruz diyebilriiz.
abstract class Urun
{

    public $urunAdi;
    public $urunFiyat;
    public $urunVergi;

    // türetilecek sınıf için abstract function tanımlama zorunluluğu var.
    abstract public function urunAdi($urunAdi);
    abstract public function urunFiyat($urunFiyat);
    abstract public function urunVergi($urunVergi);

    public function urunEkle()
    {
        //DB KAYIT
        echo 'Urun adi: '.$this->urunAdi."<br>";
        echo 'Urun Fiyat: '.$this->urunFiyat."<br>";
        echo 'Urun Vergi: '.$this->urunVergi."<br>";
    }

}

class Icecek extends Urun
{

    public function urunAdi($urunAdi)
    {
        $this->urunAdi = $urunAdi;
    }

    public function urunFiyat($urunFiyat)
    {
        $this->urunFiyat = $urunFiyat;
    }

    public function urunVergi($urunVergi)
    {
        $this->urunVergi = $urunVergi;
    }
}

class Tekstil extends Urun
{

    public function urunAdi($urunAdi)
    {
        $this->urunAdi = $urunAdi;
    }

    public function urunFiyat($urunFiyat)
    {
        $this->urunFiyat = $urunFiyat;
    }

    public function urunVergi($urunVergi)
    {
        $this->urunVergi = $urunVergi;
    }
}

$Icecek = new Icecek();

$Icecek->urunAdi('Kola');
$Icecek->urunFiyat('30');
$Icecek->urunVergi('8');

$Icecek->urunEkle();

$Tekstil = new Tekstil();

$Tekstil->urunAdi('Tshirt');
$Tekstil->urunFiyat('300');
$Tekstil->urunVergi('18');

$Tekstil->urunEkle();