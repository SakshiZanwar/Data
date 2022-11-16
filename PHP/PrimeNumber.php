<?php
$count = 0;
$num = 23;
$temp = ceil($num / 2);
for ( $i = 1; $i < $temp; $i++ ) {
    if ($num % $i == 0) {
        $count++;
    }
}
if ( $num == 0 ) {
    echo $num." is not a prime number.";
} elseif  ($count > 1 ) {
    echo $num." is not a prime number.";
} else {
    echo $num." is a prime number.";
}
?>