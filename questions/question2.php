<?php

$arr = [];

for ($i = 0; $i < 6; $i++){
    $arr[] = rand ( 10 , 20 );
}

function sumValuesArr(Array $arr){
    $count = 0;

    foreach ($arr as $item) {
        $count += $item;
    }

    print_r("O valor da soma é de: " . $count . PHP_EOL);
}

sumValuesArr($arr);
