<?php

function counter()
{
    $count = 1;
    echo $count;
    $count++;
}

counter();
counter();
counter();
counter();
// Sonuç: 1111

        ## Static olarak tanımlandığında ise;
## Static ile kullanıldığında değişkenlerin eski değerline ulaşabilirsiniz
echo '<br>';
function staticCounter(){
    static $staticCount = 1;
    echo $staticCount;
    $staticCount++;
}

staticCounter();
staticCounter();
staticCounter();
staticCounter();

// Sonuç : 1234

