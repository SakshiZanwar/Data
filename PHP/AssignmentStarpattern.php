<?php

for ($i = 1; $i <= 4; $i++) {
    for ($j = $i; $j < 4; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j <= (2 * $i - 1); $j++) {
        if ($j == 1 || $i == 4 || $j == (2 * $i - 1)) {
            echo "*";
        }
        else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
?>