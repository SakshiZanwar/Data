<!-- NumStar Pattern 5 -->
<?php
$n = 5;
$p = $n;
for ($i=1; $i <= $n; $i+=2) {
    $k = ($i-1)*$n+1;
    for($j = 0; $j < $n - 1;$j++) {
        echo $k."*";
        $k++;
    }
    echo $k."&nbsp;";
    echo "<br>";
}
if($n%2!=0) {
    $p = $n-1;
}
for ($i = $p; $i > 0; $i-=2) {
    $k=($i-1)*$n+1;
    for($j = 0; $j < $n -1; $j++) {
        echo $k."*";
        $k++;
    }
    echo $k."&nbsp;";
    echo "<br>";
}
?>