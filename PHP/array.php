<?php 

// Array : Collection of data type.

// index array. 12345
// associative array : 'key' : values
// multi D array 

// index array.
$arr = [ ['laxman','kendre',1],[10,2,3],[10,2,30],array( 10  => 'peter') ]; 

$arr1 = array(1,2,3,4);
foreach($arr1 as $values ){
    echo $values."<br />";

}
echo "<br>";

//Finding the Longest Palindrome in an Array
echo "Finding the Longest Palindrome in an Array :<br>";
function isPalindrome($n) {
    $divisor = 1;
    while ((int)($n / $divisor) >= 10)
        $divisor *= 10;
    while ($n != 0) {
        $leading = (int)($n / $divisor);
        $trailing = $n % 10;

        if ($leading != $trailing)
            return false;

        $n = (int)(($n % $divisor) / 10);

        $divisor = (int)($divisor / 100);
    }
    return true;
}
function largestPalindrome($A, $n) {
    sort($A);
 
    for ($i = $n - 1; $i >= 0; --$i) {
        if (isPalindrome($A[$i]))
            return $A[$i];
    }
    return -1;
}
$A = array(1, 232, 999991, 54545);
$n = sizeof($A);
echo largestPalindrome($A, $n);
echo "<br><br>";

//Find Second Smallest Element in an Array
echo "Find Second Smallest Element in an Array :<br>";
function print2Smallest($arr, $arr_size) {
	$MAX = 2147483647;
	if ($arr_size < 2) {
		echo(" Invalid Input ");
		return;
	}
	$first = $second = $MAX;
	for ($i = 0; $i < $arr_size ; $i ++) {
		if ($arr[$i] < $first) {
			$second = $first;
			$first = $arr[$i];
		}
		else if ($arr[$i] < $second &&
				$arr[$i] != $first)
			$second = $arr[$i];
	}
	if ($second == $MAX)
		echo("There is no second smallest element\n");
	else
		echo "The second Smallest element is ", $second;
}
$arr = array(12, 13, 1, 10, 34, 50);
$n = count($arr);
print2Smallest($arr, $n);
echo "<br><br>";

//Finding Minimum scalar product of two vectors
echo "Finding Minimum scalar product of two vectors : <br>";
$arr1 = array(1, 2, 6, 3, 7);
$arr2 = array(10, 7, 45, 3, 7);
$n = sizeof($arr1)/sizeof($arr1,1);
for($i=0; $i < $n; $i++){
    for($j = $i + 1; $j < $n; $j++){ 
        if($arr1[$i] > $arr1[$j]){
            $temp = $arr1[$i];
            $arr1[$i] = $arr1[$j];
            $arr1[$j] = $temp;
        }
    }
}
for($i =0;  $i < $n; $i++){
    for($j = $i + 1; $j < $n; $j++){
        if($arr2[$i] > $arr2[$j]){
            $temp = $arr2[$i];
            $arr2[$i] = $arr2[$j];
            $arr2[$j] = $temp;
        }
    }
}
    $product = 0;
    for($i = 0; $i < $n; $i++) {
        $product += $arr1[$i] * $arr2[$i];
    }
    echo "$product <br>";
echo "<br><br>";

//Finding Arrays are disjoint or not
echo "Finding Arrays are disjoint or not :<br>";
function disjoint($arr1, $arr2, $n, $m) {
    for($i = 0; $i < $n; $i++){
        for($j = 0; $j < $m; $j++){
            if($arr1[$i] == $arr2[$j]){
                return 0;   
            }
        }
    }
    return 1;
}
$arr1[] = array(10, 20, 30, 67);
$arr2[] = array(20, 90, 80, 77, 23);
$n = sizeof($arr1);
$m = sizeof($arr2);
    
if(disjoint($arr1, $arr2, $n, $m)) {
    printf("Yes");
} else {
    printf("No");
}
echo "<br><br>";

//Find maximum product sub-array in a given array
echo "Find maximum product sub-array in a given array :<br>";
function maxSubarrayProduct($arr, $n) {
    $result = $arr[0];
    for ($i = 0; $i < $n; $i++) {
        $mul = $arr[$i];
        for ($j = $i + 1; $i < $n; $i++) {
            $result = max($result, $mul);
            $mul *= $arr[$j];
        }
        $result = max($result, $mul);
    }
    return $result;
}
$arr = array(1, -2, -3, 10, 7, -8, -2);
$n = sizeof($arr);
echo "Maximum sub-array product is ". maxSubarrayProduct($arr,$n);
echo "<br><br>";

for ($i =  4; $i > 0; $i--) {
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