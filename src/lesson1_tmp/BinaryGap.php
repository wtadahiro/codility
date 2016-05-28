<?php
namespace Wtadahiro\Codility\Lesson1;

class BinaryGap
{

    public function solution($n) 
    {
        $binary = decbin($n);
        $ary = str_split($binary);

        $tmp = [];
        $maxLength = 0;
        foreach($ary as $flag){
            if($flag == '0'){
                $tmp[] = '0';
            }elseif($flag == '1'){
                if($maxLength < count($tmp)){
                    $maxLength = count($tmp);
                }
                $tmp = [];
            }
        }

        return $maxLength;
    }

}
