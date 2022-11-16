<?php
//Positive Or Negative Number
echo "Positive Or Negative Number :<br>";
$num = 122;
if ($num >= 0) {
    echo $num." a positive number.<br>";
}
else {
    echo $num." a negative number.<br>";
}
echo "<br>";

//Even Or Odd Number
echo "Even Or Odd Number :<br>";
$num = 15;
if ( $num % 2 == 0) {
    echo $num." a even number.<br>";
} else {
    echo $num." a odd number.<br>";
}
echo "<br>";
//Sum of first N Natural Numbers
echo "Sum of first N Natural Numbers :<br>";
$sum = 0;
$n = 10;
for ($i = 1; $i <= $n; $i++) {
    $sum += $i;
}
echo "The sum of first ".$n." natural numbers is ".$sum;
echo "<br><br>";

//Sum of N natural numbers
echo "Sum of N natural numbers :<br>";
$sum = 0;
$n = 100;
for ($i = 1; $i <= $n; $i++) {
    $sum = $sum + $i;
}
echo "The sum of ".$n." numbers is ".$sum;
echo "<br><br>";

//Sum of numbers in a given range
echo "Sum of numbers in a given range :<br>";
$a = 10;
$b = 100;
$sum = 0;
for ($i = $a; $i <= $b; $i++) {
    $sum = $sum + $i;
}
echo "The sum of numbers from range ".$a." and ".$b." is ".$sum;
echo "<br><br>";


//Greatest of two numbers
echo "Greatest of two numbers :<br>";
$a = 73;
$b = 500;
echo ($a > $b) ? $a : $b;
echo "<br><br>";

//Greatest of the Three numbers
echo "Greatest of the Three numbers :<br>";
$a = 73;
$b = 100;
$c = 25;
if(($a >= $b) && ($a >= $c)) {
    echo $a." is the greatest number.";
}
elseif (($b >= $a) && ($b >= $c)) {
    echo $b." is the greatest number.";
}
else {
    echo $c." is the greatest number.";
}
echo "<br><br>";

//Leap year or not
echo "Leap year or not :<br>";
$year = 2000;
echo (($year % 400 == 0) || ($year % 4 == 0 && $year % 100 != 0 )) ? $year.' is a leap year ' : $year.' is not a leap year ';
echo "<br><br>";

//Prime number
echo "Prime number :<br>";
$count = 0;
$num = 23;
$temp = ceil($num / 2);
for ( $i = 1; $i < $temp; $i++ ) {
    if ($num % $i == 0) {
        $count++;
    }
}
if ( $num == 0 ) {
    echo $num." is not a prime number.";
} elseif  ($count > 1 ) {
    echo $num." is not a prime number.";
} else {
    echo $num." is a prime number.";
}
echo "<br><br>";

//Prime number within a given range
echo "Prime number within a given range :<br>";
$a = 1;
$b = 10;


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
echo "<br>";


//Sum of digits of a number
echo "Sum of digits of a number :<br>";
$num = 221;
$sum = 0;
while ($num != 0) {
    $sum += $num % 10;
    $num = $num / 10;
}
echo "Sum of digits of given number is ".$sum;
echo "<br><br>";

//Reverse of a number
echo "Reverse of a number :<br>";
$num = 24573;
$rev = 0;
while ($num > 1) {
    $rem = $num % 10;
    $rev = ($rev * 10) + $rem;
    $num = $num / 10;
}
echo "Reverse of given number is ".$rev;
echo "<br><br>";

//Palindrome number
echo "Palindrome number :<br>";
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
echo "<br><br>";

//Armstrong number
echo "Armstrong number :<br>";
 
$num=407;  
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo "Yes, it is an Armstrong number";  
}  
else  
{  
echo "No, it is not an armstrong number";  
} 

echo "<br><br>";

//Fibonacci Series upto nth term
echo "Fibonacci Series upto nth term :<br>";
$n = 10;
$a = 0;
$b= 1;
echo "$a,$b";
for ($i = 2; $i < $n;$i++) {
    $temp = $a + $b;
    $a = $b;
    $b = $temp;
    echo ",$temp";
}
echo "<br><br>";

//Factorial of a number
echo "Factorial of a number :<br>";
$num = 5;
$fact = 1;
if($num < 0) {
    echo "Error";
} else {
    for($i = 1; $i <= $num; $i++) {
        $fact = $fact * $i;
    }
}
echo "Factorial of $num is $fact.";
echo "<br><br>";

//Power of a number
echo "Power of a number :<br>";
$base = 2;
$exp = 3;
$result;
$result = pow($base,$exp);
echo "Power of a $base is $result.<br>";
$result1 = 1;
while ($exp != 0) {
    $result1 *= $base;
    --$exp;
}
echo "Power of a $base is $result1.";
echo "<br><br>";

//Factor of a number
echo "Factor of a number :<br>";
$n = 50;
echo "Factors of $n are :";
for( $i = 1; $i <= $n; $i++) {
    if($n % $i == 0){
        echo "$i ";
    }
}
echo "<br><br>";

//Finding Prime Factors of a number
echo "Finding Prime Factors of a number :<br>";
$num = 100;
function primeFactor($num) {
    echo "Prime factors of $num are : ";
    for ( $i = 2; $num > 1; $i++) {
        while ($num % $i == 0) {
            echo "$i ";
            $num = $num / $i;
        }
    }
}
primeFactor($num);
echo "<br><br>";

//Strong number
echo "Strong Number :<br>";
function checkStrongNumber($number)
{
	$fact = 0;
	$x = $number;
	$sum = 0;
	while ($number != 0)
	{
		$fact = 1;
		for($i = 1; $i <= $number % 10; $i++)
			$fact *= $i;
		$sum += $fact;
		$number = (int)($number / 10);
	}
	return $sum == $x; 
}
$num = 145;
if (checkStrongNumber($num)) {
    echo "$num is Strong number";
} else {
    echo "$num is not Strong number";
}
echo "<br><br>";

//Perfect number
echo "Perfect Number :<br>";
$num = 6;
$sum = 0;
for($i = 1; $i < $num; $i++){
    if($num % $i == 0) {
        $sum = $sum + $i;
    }
}
if($sum == $num) {
    echo "$num is a perfect number";
} else {
    echo "$num is not a perfect number";
}
echo "<br><br>";

//Perfect Square
echo "Perfect Square :<br>";
$n = 50;
if (ceil(sqrt($n)) == floor(sqrt($n))) {
    echo "$n is a Perfect Square.";
} else {
    echo "$n is not a Perfect Square.";
}
echo "<br><br>";

//Automorphic Number
echo "Automorphic Number :<br>";
// function checkAutomorphic($num) {
//     $square = $num*$num;
//     while ($num != 0) {
//         if($num % 10 != $square % 10) {
//             return 0;
//         }
//         $num /= 10;
//         $square /= 10;
//     }
//     return 1;
// }
// $num = 376;
// $square = $num*$num;
// if(checkAutomorphic($num)) {
//     echo "$num is Automorphic number.";
// } else {
//     echo "$num is not a Automorphic number.";
// }
echo "<br><br>";

//Harshad number
echo "Harshad number :<br>";
function checkHarshad($num){
    $sum = 0;
    $temp = $num;
    while($temp != 0) {
        $sum = $sum + $temp % 10;
        floor($temp /= 10);
    }
    return $num % $sum == 0;
}
$num = 153;
echo ((checkHarshad($num)) ? "$num is Harshad's Number" : "$num is not Harshad's Number");
echo "<br><br>";

//Abundant number
echo "Abundant number :<br>";
$num = 18;
$sum = 0;
for( $i = 1; $i < $num; $i++) {
    if($num % $i == 0) {
        $sum = $sum + $i;
    } 
}
$abundance = $sum - $num;
if($sum > $num){
    echo "$num is an Abundant Number";
} else {
    echo "$num is not a Abundant Number"; 
} 
echo "<br><br>";

//Friendly Pair
echo "Friendly Pair :<br>";
function getDivisorsSum($num){
    $sum = 0;
    for($i = 1; $i < $num; $i++){
        if($num % $i == 0)
            $sum = $sum + $i;
    }
    return $sum;
}
$num1 = 6;
$num2 = 28;
$sum1 = getDivisorsSum($num1);
$sum2 = getDivisorsSum($num2);
if($sum1/$num1 == $sum2/$num2) {
    echo "$num1,$num2 are friendly pairs";
} else {
    echo "$num1,$num2 are not friendly pairs";
}
echo "<br><br>";

//Highest Common Factor(HCF)
echo "Highest Common Factor(HCF) :<br>";
$num1 = 24;
$num2 = 100;
$hcf = 1;
for ($i = 1; $i <= $num1 || $i <= $num2; $i++) {
    if ($num1 % $i == 0 && $num2 % $i == 0) {
        $hcf = $i;
    }
}
echo "HCF is $hcf.";
echo "<br><br>";

//Lowest Common Multiple (LCM)
echo "Lowest Common Multiple (LCM) :<br>";
$num1 = 36;
$num2 = 3;
$lcm;
$max = ($num1 > $num2)? $num1 : $num2;
for($i = $max ; $i <= $num1*$num2 ; $i++) {
    if($i % $num1 == 0 && $i % $num2 == 0){
        $lcm = $i;
        break;
    }
}
echo "The LCM is $lcm";
echo "<br><br>";

//Greatest Common Divisor (GCD)
echo "Greatest Common Divisor (GCD) :<br>";
$n1 = 14;
$n2 = 40;
$gcd = 1;    
for($i = 1; $i <= $n1 || $i <= $n2; $i++) {
    if($n1 % $i == 0 && $n2 % $i == 0) {
        $gcd = $i;
    }
}
echo "The GCD of $n1 and $n2 is $gcd";
echo "<br><br>";

//Binary to Decimal conversion
echo "Binary to Decimal conversion :<br>";
function binaryToDecimal($num) {
    $i = 0;
    $decimal= 0;
    while ($num!=0) {
        $digit = $num % 10;
        $decimal += $digit * pow(2,$i);
        $num /= 10;
        $i++;
    }
    return $decimal;
}
$binary = 1110011;
echo "Decimal of $binary is ".binaryToDecimal($binary);
echo "<br><br>";

//Octal to Decimal conversion
echo "Octal to Decimal conversion :<br>";
function octToDecimal($num) {
    $i = 0;
    $decimal = 0;
    while ($num!=0) {
        $digit = $num % 10;
        $decimal += $digit * pow(8,$i);
        $num /= 10;
        $i++;
    }
    return $decimal;
}
$octal = 777;
echo "Decimal of $octal is ".octToDecimal($octal);
echo "<br><br>";

echo "Decimal to Binary conversion :<br>";
function decToBinary($n) {
    $binaryNum = [];
    $i = 0;
    while ($n > 0) {
        $binaryNum[$i] = $n % 2;
        $n = (int)($n / 2);
        $i++;
    }
    for ($j = $i - 1; $j >= 0; $j--)
        echo $binaryNum[$j];
}
$n = 123;
decToBinary($n);
echo "<br><br>";

echo "Decimal to Octal conversion :<br>";
function decToOctal($n1) {
    $octalNum = [];
    $i = 0;
    while ($n1 > 0) {
        $octalNum[$i] = $n1 % 8;
        $n1 = (int)($n1 / 8);
        $i++;
    }
    for ($j = $i - 1; $j >= 0; $j--)
        echo $octalNum[$j];
}
$n1 = 123;
decToOctal($n1);
echo "<br><br>";

//Area of Circle
echo "Area of Circle :<br>";
$r = 5;
$pi = 3.14;
$area = $pi * $r * $r;
echo "Area of Circle is $area.";
echo "<br><br>";

//Calculate the number of digits in an integer
echo "Calculate the number of digits in an integer : <br>";
function countDigit($n) {
    $count = 0;
    while ($n != 0) {
        $n = round($n / 10);
        ++$count;
    }
    echo "Number of digits in an integer is $count.";
}
$n = 123456789995432356;
countDigit($n);
echo "<br><br>";

//Prime number between 1 to 100
echo "Prime number between 1 to 100 :<br>";
$a = 1;
$b = 100;
function checkPrime1($num) {
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
    if (checkPrime1($i)) {
        echo "$i ";
    }
}
echo "<br><br>";

//Counting number of days in a given month of a year
echo "Counting number of days in a given month of a year: <br>";
$month = 2;
$year = 2016;
if (($month == 2) && (($year % 400 == 0) || ($year % 100 != 0 && ($year % 4 == 0)))) {
    echo "Number of days is 29.";
} elseif (($month == 2)) {
    echo "Number of days is 28.";
} elseif (($month == 1 || $month==3 || $month==5 || $month==7 || $month==8 || $month==10 || $month==12)) {
    echo "Number of days is 31.";
} elseif (($month==4 || $month==6 || $month==9 || $month==11)) {
    echo "Number of days is 30.";
} else {
    echo "Invalid Month.";
}
echo "<br><br>";

//Finding Number of times x digit occurs in a given input
echo "Finding Number of times x digit occurs in a given input : <br>";
$num3 = 567884568;
$d = 8;
$count1 = 0;
while ($num3) {
    $rem = $num3 % 10;
    if ($rem == $d) {
        $count1++;
    }
    $num3 = $num3/10;
}
echo "The occurance of $d in given number is $count1.";
echo "<br><br>";

//Counting number of days in a given month of a year
echo "Counting number of days in a given month of a year: <br>";

echo "<br><br>";
?>