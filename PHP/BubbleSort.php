<?php
$arr1 = array(64, 32, 4, 26, 43, 68, 11);
echo "Before Sorting : ";
foreach ($arr1 as $value) {
    echo $value . ' ';
}
$temp = 0;
echo "<br>";
$n = sizeof($arr1);//7
for($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($arr1[$j] > $arr1[$j+1]) {
            $temp = $arr1[$j];
            $arr1[$j] = $arr1[$j+1];
            $arr1[$j+1] = $temp;
        }
    }
}
echo "Sorted array : ";
// for ($i1 = 0; $i1 < $n; $i1++) {
//     echo $arr1[$i1]." ";
// }

foreach ($arr1 as $value1) {
    echo $value1. ' ';
}
?>