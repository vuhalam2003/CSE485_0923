<?php
$arrs = ['1', 'B', 'C', 'E'];

function lowercase($array)
{
    $a = array();

    foreach ($array as $i){
        if (is_string($i))
        {
        if (ctype_alpha($i) ==true){
            $a[] = strtoupper($i);
        }}
    return $a;
}}
$newstr = lowercase($arrs);
print_r($newstr);