<?php
function insertion_Sort($my_array) {
	for($i = 0; $i < count($my_array); $i++){
		$val = $my_array[$i];
		$j = $i-1;
		while($j >= 0 && $my_array[$j] > $val) {
			$my_array[$j+1] = $my_array[$j];
			$j--;
		}
		$my_array[$j+1] = $val;
	}
	return $my_array;
}
$test_array = array(32, 10, 42, 15, -18, 74);
echo "Original Array :<br>";
foreach ($test_array as $value) {
    echo $value . ' ';
}
echo "<br>";
echo "Sorted Array :<br>";
$arr = insertion_Sort($test_array);
foreach ($arr as $value1) {
    echo $value1 . ' ';
}
?>