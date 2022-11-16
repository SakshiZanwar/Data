<?php
$arr = array(64, 25, 37, 82, 11);
echo "Before Sorting : ";
foreach ($arr as $value) {
    echo $value . ' ';
}
echo "<br>";
$n = count($arr);
for($i = 0; $i < $n ; $i++) {
    $low = $i;
    for($j = $i + 1; $j < $n ; $j++) {
        if ($arr[$j] < $arr[$low]) {
            $low = $j;
        }
    }
    if ($arr[$i] > $arr[$low]) {
        $tmp = $arr[$i];
        $arr[$i] = $arr[$low];
        $arr[$low] = $tmp;
    }
}
echo "Sorted array : \n"; 
for ($i = 0; $i < $n; $i++) {
    echo $arr[$i] . " ";
}
?>