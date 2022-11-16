<?php
function palindrome($n) {
    $num = $n;
    $sum = 0;
    while (floor($num)) {
        $rem = $num % 10;
        $sum = $sum * 10 + $rem;
        $num = $num / 10;
    }
    return $sum;
}
$number = 12321;
$palindrome = palindrome($number);
if ($number == $palindrome) {
    echo "$number is a Palindrome Number.";
}
else {
    echo "$number is a not Palindrome Number.";
}


//Can a number be expressed as a sum of two prime numbers
echo "Can a number be expressed as a sum of two prime numbers :<br>";
#include<stdio.h>
sum_of_two_primes($n);
$n = 25;
$flag = 0;
for($i = 2; $i <= $n/2; ++$i) {
    if(sum_of_two_primes($i) == 1) {
        if(sum_of_two_primes($n-$i) == 1) {
            $j = $n - $i;
            echo "$n can be expressed as the sum of $i and $j";
            $flag = 1;
        }
    }
}
if($flag == 0){
    echo "$n cannot be expressed as the sum of two primes<br>";
}
return 0;

function sum_of_two_primes($n) {
    $isPrime = 1;
    for($i = 2; $i <= $n/2; ++$i) {
       if($n % $i == 0) {
          $isPrime = 0;
          break;
       }
    }
    return $isPrime;
}
?>