<?php
function quick_sort($my_array) {
	$loe = $gt = array();
	if(count($my_array) < 2) {
		return $my_array;
	}
	$pivot_key = key($my_array);
	$pivot = array_shift($my_array);
	foreach($my_array as $val) {
		if($val <= $pivot) {
			$loe[] = $val;
		} elseif ($val > $pivot) {
			$gt[] = $val;
		}
	}
	return array_merge(quick_sort($loe),array($pivot_key=>$pivot),quick_sort($gt));
}
$my_array = array(38, 23, 57, -13, 49, 15);
echo "Original Array :<br>";
foreach ($my_array as $value) {
  echo $value . ' ';
}
echo "<br>";
$array = quick_sort($my_array);
echo "Sorted Array :<br>";
foreach ($array as $value) {
  echo $value . ' ';
}
echo "<br>";
?>