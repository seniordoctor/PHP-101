<?php

$i = 1;
while ($i <= 10)
{
    echo $i++; /*
 yazdırılan deger $i
 degerinin artısıntan oceki degeridir (sonda-arttırım) */

}

echo '<br>';
echo '<br>';

$n = 4;
while ( ++$n < 10 ) echo $n;

// DO - WHILE DONGUSU

echo '<br>';
echo '<br>';

$r = 0;
do {
    echo $r;
} while ( $r > 0 );