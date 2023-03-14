<?php

$hayvan_gruplari = [
    'surungen_hayvanlar' => [
        'Yılan',
        'Kertenkele' => [
            'keler', 'bukalemun', 'geko', 'agama'
        ]
    ],
    'ucabilen_hayvanlar' => ['Kartal', 'Güvercin', 'Şahin']
];

print_r($hayvan_gruplari);

/*
Array
(
    [surungen_hayvanlar] => Array
        (
            [0] => Yılan
            [Kertenkele] => Array
                (
                    [0] => keler
                    [1] => bukalemun
                    [2] => geko
                    [3] => agama
                )

        )

    [ucabilen_hayvanlar] => Array
        (
            [0] => Kartal
            [1] => Güvercin
            [2] => Şahin
        )

)
 */

/*
 *  Spesifik bir dizi elemanı ekrana yazdırmak istersek nasıl yapıyoruz?
$hayvan_gruplari = [
    'surungen_hayvanlar' => [
        'Yılan',
        'Kertenkele' => [
            'keler', 'bukalemun', 'geko', 'agama'
        ]
    ],
    'ucabilen_hayvanlar' => ['Kartal','Güvercin','Şahin']
];

echo $hayvan_gruplari['surungen_hayvanlar']['Kertenkele'][1];

// Ekran Çıktısı
bukalemun
 */