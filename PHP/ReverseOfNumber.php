<?php
$num = 24573;
$rev = 0;
while ($num > 1) {
    $rem = $num % 10;
    $rev = ($rev * 10) + $rem;
    $num = $num / 10;
}
echo "Reverse of given number is ".$rev;
return 0;
?>