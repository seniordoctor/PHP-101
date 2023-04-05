<?php
/*
 * Namespace Kullanımı

Kullanılması zorunlu değildir.
Aynı isimli sınıfların ayırt edilmesini sağlar.
Geleneksel olarak anadizinden bulunduğu klasöre kadar uzanan bir namespace tanımlanır.
*/


// namespace ile kullanacak çağırmazsak program nereden veriyi alacağını bilmeyecektir
require 'app/controller/Home.php';
require 'app/view/Home.php';

$HomeController = new app\controller\Home();
echo "<br>";
$HomeView = new app\view\Home();
