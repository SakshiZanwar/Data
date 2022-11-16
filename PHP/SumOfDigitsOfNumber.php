<?php
$num = 245738910;
$sum = 0;
while ($num != 0) {
    $sum += $num % 10;
    $num = $num / 10;
}
echo "Sum of digits of given number is ".$sum;
?>