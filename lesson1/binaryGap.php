<?php

function solution($n){
    $binary = decbin($n);
    $ary = str_split($binary);

    $tmp = [];
    $maxLength = 0;
    foreach($ary as $flag){
        if($flag == '0'){
            array_push($tmp, '0');
        }elseif($flag == '1'){
            if($maxLength < count($tmp)){
                $maxLength = count($tmp);
            }
            $tmp = [];
        }
    }

    echo $binary . PHP_EOL;
    echo $maxLength . PHP_EOL;
}

solution($argv[1]);
