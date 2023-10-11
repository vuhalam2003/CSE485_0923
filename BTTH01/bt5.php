<?php
$a = ['a' => ['b' => 0, 'c' => 1],'b' => ['e' => 2,'o' => ['b' => 3]]];

$b3 = $a['b']['o']['b'];
echo "Giá trị bằng $b3 có key từ b.<br>";

$c1 = $a['a']['c'];
echo "Giá trị bằng $c1 có key từ c.<br>";

$tt = $a['a'];
print_r($tt);