<?php
 $array = array(11, 22, 33, 44, 55);
 $q = 0;

function summ($array) {
    echo array_sum($array) . '<br>';
}

function square($array) {
for($i=0; $i<count($array); $i++) {
    $a = pow($array[$i], 2) . '<br>';
    echo $a;
}
}

function summ_of_square($array) {
    for($i=0; $i<count($array); $i++) {
        $b = $q += pow($array[$i], 2);
        echo $b . '<br>';
    }
}
summ($array);
square($array);
summ_of_square($array);




?>