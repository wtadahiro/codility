<?php

function solution($A, $K){
    $length = count($A);
    $tmpAry = [];

    foreach($A as $idx => $val){
        $key = ($idx + $K) % ($length);
        $tmpAry[$key] = $val;
    }

    $retAry = [];
    for($i=0; $i<$length; $i++){
        $retAry[] = $tmpAry[$i];
    }

    return $retAry;
}

print_r(solution([1,2,3,4,5], 3));
