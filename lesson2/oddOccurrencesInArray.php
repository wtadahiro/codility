<?php

function solution($A){
    sort($A);
    foreach($A as $key => $val){
        if(array_key_exists($key, $A)){
            unset($A[$key]);
            if($val === $A[$key+1]){
                unset($A[$key+1]);
            }else{
                return $val;
            }
        }
    }
}

print_r(solution([9, 3, 9, 3, 9, 7, 9]));

