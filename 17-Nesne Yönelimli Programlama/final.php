<?php
/*
// final bir class'ın son hali olduğunu gösterir. KALITIM YOLUYLA ÇOĞALTILAMAZ.
// Method'larla da kullanılırsa miras alan sınıfta üzerine override edemeyiz.

class Bir{
    public function methodBir()
    {
        echo 'MethodBir';
    }
}

final class Iki extends Bir{
    public function methodIki()
    {
        echo 'MethodIki';
    }
}

// class Iki final olduğu için interit edilemez, kod fatal error verir.
class Uc extends Iki
    {
    public function methodUc()
    {
        echo 'MethodUc';
    }
}

$Uc = new Uc();

$Uc->methodBir();
$Uc->methodIki();
$Uc->methodUc();
*/