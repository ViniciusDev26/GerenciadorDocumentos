<?php

$numbers = [2, -1, 7, 9, 12, 15, 22, 25, 30, 32];

function returnSmallerAndLargerNumber (Array $numbers){
    $smaller = null;
    $larger = null;

    foreach ($numbers as $index => $number) {
        if($index == 0){
            $larger = $number;
            $smaller = $number;
        }

        if($number > $larger){
            $larger = $number;
        }

        if ($number < $smaller){
            $smaller = $number;
        }
    }

    print_r(["O menor numero é" => $smaller, "O maior numero é" => $larger]);
}

returnSmallerAndLargerNumber($numbers);
