<?php


/*
#JSON

    -JSON veri depolama ve veri alışverişi için kullanılan bir formattır.
    -JSON .json uzantılı dosyalarda tutulabilir.
    -JSON formatı,benzer fonksiyonlara sahip olan XML‘e (ing) daha basit ve hafif bir alternatiftir.
    -Veriler Anahtar-Değer şeklinde tutulur.
    -Bir JSON nesnesi {} küme parantezleriyle başlar ve biter.
    -İçinde iki veya daha fazla anahtar/değer çiftlerine sahip olabilir ve bu ikisini bir virgül ile ayırır.
    -Anahtar ve değerler : ile ayrılır {'isim': 'Recep'} .

#XML
    -XML Extensible Markup Language, Genişletilebilir İşaretleme Dili
    -HTML gibi bir işaretleme dilidir.
    -Veriler hiyerarşik biçimde etiketler arasında tutulur.
    -.xml uzantılı dosyalar içerisinde tutulabilir.




$array = [
    'isim' => 'Recep',
    'soyisim' => 'MERT',
    'yas' => 22
];

$obj = file_get_contents('kisi.json');

$array = json_decode($obj, true);
echo "<pre>";
print_r($array);

echo json_encode($array);

 json objesinden biz dizi elde etmek istersem decode kullanıyoruz. JSON decode'dan dizi olarak almak istersek;
 2. parametre olarak true giriyoruz.
$array = json_decode($obj, true);

echo "<pre>";
print_r($array);

 objenin içindeki isim'e ulaşmak için -> kullanıyoruz
echo $array->isim;

echo $array['soyisim'];
*/

//$kisiler = simplexml_load_file('kisiler.xml');
//echo "<pre>";
//print_r($kisiler);

/*
header('Content-type: application/xml charset="utf8"');
$xml = new SimpleXMLElement('<kisiler/>');

$kisi = $xml->addChild('kisi');
$kisi->addChild('isim', 'Recep');
$kisi->addChild('soyisim', 'MERT');
$kisi->addChild('yas', 22);

echo $xml->asXML();
*/
phpinfo();