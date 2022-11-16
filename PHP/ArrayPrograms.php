<?php
for($i = 0; $i < 4; $i++) {
    for ($j = 1; $j < $i + 1; $j++) {
        if ($i == 1 || $j == 4 || $j == (2 * $i + 1))
            echo "&nbsp;&nbsp;";
    }
    for ($j = 1; $j < (4 * 2 - (2 * $i - 1) + 1); $j++) {
        if ($i = 4 || $j == 1 || $j == 4 * 2 - (2 * $i - 1)) {
            echo "*";
        }
    }
    echo "<br><br>";
}

//Largest Element in an Array
echo "Largest Element in an Array: <br>";
function largest($arr) {
    $n = count($arr);
    $max = $arr[0];
    for($i=1; $i < $n; $i++) {
        if ($arr[$i] > $max)
            $max = $arr[$i];
    }
    return $max;
}
$arr = array(20, 5, 35, 40, 10, 50, 15);    
echo "The Largest element is: ".largest($arr);
echo "<br><br>";

//Smallest Element in an Array
echo "Smallest Element in an Array: <br>";
function smallest($arr) {
    $n = count($arr);
    $min = $arr[0];
    for($i=1; $i < $n; $i++) {
        if ($min > $arr[$i])
            $min = $arr[$i];
    }
    return $min;
}
$arr = array(20, 5, 35, 40, 10, 50, 15);    
echo "The Smallest element is: ".smallest($arr);
echo "<br><br>";

//Largest and Smallest Element in an Array
echo "Largest and Smallest Element in an Array: <br>";
function largeSmall($arr) {
    $n = count($arr);
    $max = $min = $arr[0];
    for($i=1; $i < $n; $i++) {
        if ($max < $arr[$i])
            $max = $arr[$i];
        if ($min > $arr[$i])
            $min = $arr[$i];
    }
    echo  "The Largest element is: $max<br>";
    echo  "The Smallest element is: $min";
}
$arr = array(20, 5, 35, 40, 10, 50, 15);    
largeSmall($arr);
echo "<br><br>";

//Calculate the sum of elements in an array
echo "Calculate the sum of elements in an array :<br>";
$my_array = array(10, 80, 60, 30, 70);
$result = 0;
foreach($my_array as $value) {
  $result += $value;
}
echo "The sum of elements in an array : $result"; 
echo "<br><br>";

//Reverse an Array
echo "Reverse an Array :<br>";
$revArray = array(10,20,30,40);
$len = count($revArray);
for($i = 0; $i < $len/2; $i++){
  $temp = $revArray[$i];
  $revArray[$i] = $revArray[$len - $i - 1];
  $revArray[$len - $i - 1] = $temp;
}
print_r($revArray);
echo "<br><br>";

//Sort the elements of an array
echo "Sort the elements of an array :<br>";
$sortArr = array('2','4','8','5','1');
for($i = 0; $i < count($sortArr); $i++) {
    for($j = 0; $j < count($sortArr) - 1; $j++){
        if($sortArr[$j] > $sortArr[$j + 1]) {
            $temp = $sortArr[$j + 1];
            $sortArr[$j + 1] = $sortArr[$j];
            $sortArr[$j] = $temp;
        }       
    }
}
echo "Sorted Array is: <br />";
print_r($sortArr);
echo "<br/><br/>";

//Counting Distinct Elements in an Array
echo "Counting Distinct Elements in an Array :<br>";
function countDistinct( &$arr, $n) {
    $distinct = 1;
    for ( $i = 1; $i < $n; $i++) {
        for ($j = 0; $j < $i; $j++)
            if ($arr[$i] == $arr[$j])
                break;
 
        if ($i == $j)
            $distinct++;
    }
    echo "The distinct elements in array are $distinct.";
}
$arr = array( 12, 10, 9, 45, 2, 10, 10, 45 );
$n = count($arr);
echo countDistinct($arr, $n);
echo "<br/><br/>";

//Finding Repeating elements in an Array
echo "Finding Repeating elements in an Array :<br>";
$arr1 = array(1, 4, 6, 1, 8, 9, 4, 6, 8, 6, 5, 1);
$temp_array = array();
foreach($arr1 as $val) {
    if(isset($temp_array[$val])) {
        $temp_array[$val] = $val;
    } else {
        $temp_array[$val] = 0;
    }
}
foreach($temp_array as $val2) {
    if($val2 > 0) {
        echo "$val2 ";
    }
}
echo "<br><br>";

//Removing Duplicate elements from an array
echo "Removing Duplicate elements from an array :<br>";
$inputArr = array(1, 4, 2, 1, 6, 4, 9, 7, 2, 9);
$duplicateArr = array();
foreach($inputArr as $inputArrayItem) {
    foreach($duplicateArr as $outputArrayItem) {
        if($inputArrayItem == $outputArrayItem) {
            continue 2;
        }
    }
    $duplicateArr[] = $inputArrayItem;
}
print_r($duplicateArr);
echo "<br><br>";

//Finding the frequency of elements in an array
echo "Finding the frequency of elements in an array :<br>";
$arrayName = array(1, 2, 1, 3, 4, 5, 6, 7, 4, 2, 1, 7, 9, 4, 3, 2, 5, 9);
$resultArray = array();
foreach($arrayName as $value) {
    $resultArray[$value] = isset($resultArray[$value]) ? $resultArray[$value] + 1 : 1;
}
print_r($resultArray);
echo "<br><br>";

//Counting the number of even and odd elements in an array
echo "Counting the number of even and odd elements in an array :<br>";
function CountingEvenOdd( $arr, $arr_size) {
    $even_count = 0;        
    $odd_count = 0;            
    for( $i = 0 ; $i < $arr_size ; $i++) {
        if ($arr[$i] & 1 == 1)
            $odd_count++ ;    
        else               
            $even_count++ ;        
    }
    echo "Number of even elements = " , $even_count,"<br> Number of odd ","elements = " ,$odd_count ;
}
$arr = array(2, 3, 4, 5, 6, 8, 1, 9, 4, 6, 10);
$n = count($arr);
CountingEvenOdd($arr, $n);
echo "<br><br>";

//Sort first half in ascending order and second half in descending
echo "Sort first half in ascending order and second half in descending :<br>";
function printOrder($arr, $n) {
    sort($arr);
    for ($i = 0; $i < intval($n / 2); $i++) {
        echo $arr[$i] . " ";
    }
    for ($j = $n - 1; $j >= intval($n / 2); $j--) {
        echo $arr[$j] . " ";
    }
}
$arr = array(5, 4, 6, 2, 1, 3, 8, 9, 7, 11);
$n = count($arr);
printOrder($arr, $n);
echo "<br><br>";

//Find all Symmetric pairs in an array
echo "Find all Symmetric pairs in an array :<br>";
$pairs = array (
    array(1,2),
    array(3,4),
    array(2,1),
    array(1,5),
    array(4,3)
  );
for($i = 0; $i < 5; $i++){
    for($j = $i + 1; $j < 5; $j++){
        if($pairs[$i][0] == $pairs[$j][1] && $pairs[$i][1] == $pairs[$j][0]) {
            echo "(".$pairs[$i][0].", ".$pairs[$i][1].") ";
        }
    }
}
echo "<br><br>";

//Determine Array is a subset of another array or not
echo "Determine Array is a subset of another array or not :<br>";
function isSubset($arr1, $arr2, $m, $n) {
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            if($arr2[$i] == $arr1[$j])
                break;
        }
        if ($j == $m)
            return 0;
    }
    return 1;
}
$arr1 = array(11, 1, 13, 21, 3, 7);
$arr2 = array(11, 3, 7, 1);  
$m = count($arr1);
$n = count($arr2);
if(isSubset($arr1, $arr2, $m, $n)) {
    echo "arr2[] is subset of arr1[].";
} else {
    echo "arr2[] is not a subset of arr1[].";
}
echo "<br><br>";

//Determine can all numbers of an array be made equal
echo "Determine can all numbers of an array be made equal :<br>";
function EqualNumbers($a, $n) {
    for ($i = 0; $i < $n; $i++) {
        while ($a[$i] % 2 == 0)
            $a[$i] /= 2;

        while ($a[$i] % 3 == 0)
            $a[$i] /= 3;
 
        if ($a[$i] != $a[0]) {
            return false;
        }
    }
    return true;
}
$a = array(50, 75, 150 );
$n = sizeof($a);
if (EqualNumbers($a, $n))
    echo "Yes";
else
    echo "No";
echo "<br><br>";

//Finding Minimum sum of absolute difference of given array
echo "Finding Minimum sum of absolute difference of given array :<br>";
function sumOfMinAbsDifferences($arr, $n) {
    sort($arr);
    sort( $arr,$n);
    $sum = 0;

    $sum += abs($arr[0] - $arr[1]);

    $sum += abs($arr[$n - 1] - $arr[$n - 2]);

    for ($i = 1; $i < $n - 1; $i++)
        $sum += min(abs($arr[$i] - $arr[$i - 1]),
                   abs($arr[$i] - $arr[$i + 1]));
    return $sum;
}
$arr = array(5, 10, 1, 4, 8, 7);
$n = sizeof($arr);
echo "Sum = ", sumOfMinAbsDifferences($arr, $n);
echo "<br><br>";

//Sort an array according to the order defined by another array
echo "Sort an array according to the order defined by another array :<br>";

echo "<br><br>";

$arr = array(100, 2, 70, 12 , 90);
$n = sizeof($arr);

$temp = [$n];
//
for($i = 0; $i < $n; $i++)
$temp[$i] = $arr[$i];
for($i = 0; $i < $n; $i++){
    for($j = $i + 1; $j < $n; $j++){
        $x = $temp[$i];
        $temp[$i] = $temp[$j];
        $temp[$j] = $x;
    }
}
for($i = 0; $i < $n; $i++){
    for($j = 0; $j < $n; $j++){
        if($temp[$j] == $arr[$i])
        {
            $arr[$i] = $j+1;
            break;
        }
    }
}
for($i = 0; $i < $n; $i++)
echo $arr[$i];
?>