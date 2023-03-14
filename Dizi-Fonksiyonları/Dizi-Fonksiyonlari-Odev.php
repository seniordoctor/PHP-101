<?php

echo "<pre>";
$planets = ["Mercury", "Venus", "Earth","Mars","Jupiter","Saturn","Uranus","Neptune","","", NULL];
$mapped_arr = array_map(function($e){
    global $planets;
    if($e == ""){
        return NULL;}
    else{
        return $e;}
}, $planets);
$filtered_arr = array_filter($mapped_arr, function($e){
    return $e != NULL ? $e : false;
});

function randomArr($i){
    global $filtered_arr;
    $result = array_flip($filtered_arr);
    return array_rand($result, $i);
}
// $arr = array_filter(function($e){

// }, $arr)

print_r(randomArr(2));
print_r(randomArr(3));
print_r(randomArr(2));
print_r(randomArr(4));
print_r(randomArr(5));