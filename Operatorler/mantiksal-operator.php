<?php

$a = 3;
$b = 2;

echo ($a > $b) && ($a != $b); // Hem $a > $b hem de $a != $b durumları true sonucu verdiğinden; sonuç true olacaktır.
echo ($a > $b) || ($a == $b); // Hem $a > $b true $a == $b false sonucu verdiğinden; Veya(||) koşulunda sonuç true olacaktır.


$r = 3;
$n = 2;

echo (($r < $n) && ($r != $n)) || $r !== $n;