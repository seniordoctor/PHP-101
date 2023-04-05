<?php

//yeni bir dosya olustur, time - 64000(bir güne eşit) ile bir gün öncesinde oluşturulmuş gibi zaman damgası verebiliriz
//touch('text3.txt', time() - 86400);

//unlink ile oluşturulan dosyayı silebiliriz
//unlink('text3.txt');

//fopen fonksiyonu ile önce dosyayı açıyoruz, 2. parametre: hangi amaçla (işlem kipi) kullanılır.
//fopen('test.txt', 'w');

//$file = fopen('test.txt', 'r');

/*while ($satir = fgets($file)){
    echo $satir."<br>";
}
*/

//fclose ile dosyayı kapatırız.
//fclose($file);

//fread ile okumak istediğimiz dosyayı seçtik, 2. parametre olarak o dosyada okumak istediğimiz byte kadarını yazdık.
//filesize ile dosyanın kaç byte olduğunu öğrendik.
//size = filesize('test.txt');
//echo fread($file, $size);

//fwrite ile yeni veri dosyaya yeni veri yazdırdık.
//fwrite($file, "\n3YENİ VERİ!");

/*
    while ($satir = fgets($file)){
        print_r(feof($file)); echo "-";
        echo $satir."<br>";
    }

    fclose($file);
*/

//file_exists fonksiyonu ile PHP'de dosya veya dizin varlığını kontrol eder.
/*
    $kontrol = file_exists('test.txt');

    var_dump($kontrol);
*/

//file_put_content ile dosyaya içerik ekleyebiliriz.
//file_put_contents('test.txt', "\n İçerik file put content ile eklendi", FILE_APPEND);

//file_get ile dosyayı okuyabiliriz.
//$get = file_get_contents('test.txt');
//print_r($get);

/*
$dosya = "<?php ";
$dosya .= '$isim = "Recep"; ';
$dosya .= 'echo $isim;';

// FILE_APPEND parametresi olmazsa dosyayı sıfırdan yazar.
file_put_contents('', $dosya);
*/






/*
Dosya Erişim Modları - Dosya Kipleri

r : Read işlemi. Dosyanın sadece içeriğinin okunması gerektiğini belirtir.
r+ : Dosyanın içeriğinin he okunabilmesi hem de yazılabilmesinin gerektiğini belirtir.
w : Dosyaya sadece yazma işleminin yapılabilmesinin gerektiğini belirtir.
    Dosyanın içeriği tamamen silinir ve baştan itibaren yazmaya başlanır.
    Dosya belirtilen adreste yok ise yeniden oluşturulur.

w+ : Dosyaya hem yazma işleminin yapılabilmesi hem de dosya içeriğinin okunabilmesinin gerektiğini belirtir.
    Dosyanın içeriği silinir ve baştan veri yazma işlemi gerçekleştirilir.
    Dosya belirtilen adreste yok ise yeniden oluşturulur.

a : Dosya içerisine sadece veri eklenebilmesi gerektiğini belirtir. D
    osyanın içeriği silinmez, içeriğin sonuna veri eklenir.
    Dosya belirtilen adreste bulunmuyorsa yeniden oluşturulur.

a+ : Dosyaya hem veri eklenebilmesini hem de verinin okunabilmesinin gerektiğini belirtir.
    Dosyanın içeriği silinmez, içeriğin sonuna veri eklenir.
    Dosya belirtilen adreste yok ise yeniden oluşturulur.

x : Dosyanın oluşturulması sağlanır ve oluşturulan dosyanın içerisine veri yazmak için açılması gerektiğini belirtir.
    Aynı isimde bir dosya belirtilen adreste var ise fopen fonksiyonundan ‘false’ değeri döner.

x+ : Dosyanın oluşturulması sağlanır ve içerisine hem veri yazma hem de verileri okunması gerektiğini belirtir.
     Dosya belirtilen adreste aynı isimde zaten var ise fopen fonksiyonundan ‘false’ değeri döner ve hata oluşur.
 */