<?php
$max_str ='';
$min_str ='';

$max = 0;
$min = PHP_INT_MAX;
$array = ['programming', 'php', 'basic', 'dev', 'is', 'program is PHP'];

foreach($array as $str){
    $length = strlen($str);

    if ($length > $max){
        $max = $length;
        $max_str = $str;
    }

    if ($length < $min){
        $min = $length;
        $min_str = $str;
    }
}

echo "Max = $max_str.<br> Min = $min_str";