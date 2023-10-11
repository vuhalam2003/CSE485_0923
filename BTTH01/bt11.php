<?php
$array = array(1, 2, 3, 4, 5);

unset($array[3]);

$result = array_values($array);
print_r($result);