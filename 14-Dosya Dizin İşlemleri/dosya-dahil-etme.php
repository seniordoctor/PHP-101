<?php

//class vs dahil etmek istiyorsak kullanabiliriz. Eğer test.txt yoksa fatal error verir.
//require 'test.txt';

//fatal error değil warning alırız sadece - include
include 'a.php';

//1 defa getirir
/*
require_once ('a.php');
require_once ('a.php');
require_once ('a.php');
require_once ('a.php');
require_once ('a.php');
require_once ('a.php');
*/

$dizi = include "a.php";

print_r($dizi);



