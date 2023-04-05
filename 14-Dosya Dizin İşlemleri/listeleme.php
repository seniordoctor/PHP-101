<?php

// __DIR__ sabiti yazılan sayfanın tam yolunu gösterir.
//echo __DIR__;

/*
$files = scandir('.');
// Bulunduğumuz dizindeki tüm dosya ve klasörleri listeler.
$files = array_filter(scandir('.'), 'is_dir');
// Bulunduğumuz dizindeki sadece dosyaları listeler.
$files = glob('*');
// Bulunduğumuz dizindeki sadece dosyaları listeler.
$files = glob('*.php');
// Bulunduğumuz dizindeki sadece .php uzantılı dosyaları listeler.
$files = glob('*.{php,txt}', GLOB_BRACE);
// Bulunduğumuz dizindeki sadece .php uzantılı dosyaları listeler.

*/

$files = glob('*', GLOB_ONLYDIR);
// Bulunduğumuz dizindeki sadece dizinleri listeler.
function listAllDir($dir){
    $files = scandir($dir);
    echo "<ul>";
    foreach ($files as $file):
        if ($file != '.' && $file != '..'):
            echo "<li>";
            echo !is_dir($dir.'/'.$file) ? $file : '<strong>'. $file . '</strong>';
            if (is_dir($dir.'/'.$file)) {
                listAllDir($dir.'/'.$file);
            }
            echo "</li>";
        endif;
    endforeach;
    echo "</ul>";
}

listAllDir('.');