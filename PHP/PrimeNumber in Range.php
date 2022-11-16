<?php
$a = 20;
$b = 50;
function checkPrime($num) {
    if ($num < 2) {
        return 0;
    }
    else {
        $x = $num/2;
        for ($i = 2; $i < $x;$i++) {
            if ($num % $i == 0) {
                return 0;
            }
        }
    }
    return 1;
}
for ($i = $a; $i <= $b; $i++) {
    if (checkPrime($i)) {
        echo $i;
        echo "<br>";
    }
}
?>