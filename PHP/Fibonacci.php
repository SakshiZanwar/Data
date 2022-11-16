<?php
$n = 10;
$a = 0;
$b= 1;
echo "$a,$b";
for ($i = 2; $i < $n;$i++) {
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
    echo ",$temp";
}
?>