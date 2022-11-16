<?php
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
    printf("Error");
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
echo "Power of a $base is $result.";
echo "<br><br>";

//Factor of a number
echo "Factor of a number :<br>";
$n = 50;
echo "Factors of $n are :";
for( $i = 1; $i <= $n; $i++) {
    if($n % $i == 0){
        echo "$i,";
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
$num = 15;
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
function isAutomorphic($N) {
    $sq = $N * $N;
    while ($N > 0) {
        if ($N % 10 != $sq % 10)
            return -1;

        $N /= 10;
        $sq /= 10;
    } 
    return 1;
}
$N = 13;
$autoMorphic = isAutomorphic($N) ? "$N is Automorphic Number." : "$N is not Automorphic Number.";
echo $autoMorphic;
echo "<br><br>";

//Harshad number
echo "Harshad number :<br>";
function checkHarshad($num){
    $sum = 0;
    $temp = $num;
    while($temp != 0) {
        $sum = $sum + $temp % 10;
        $temp /= 10;
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
$n1 = 18;
$n2 = 9;
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

//HexaDecimal to Decimal conversion
echo "HexaDecimal to Decimal conversion :<br>";
$hex = "76b";
echo "Decimal of $hex is ".base_convert($hex, 16, 10);
echo "<br><br>";

//Decimal to Binary conversion
echo "Decimal to Binary conversion :<br>";
$decToBinary = decbin(156);
echo "Binary of 156 is $decToBinary.";
echo "<br><br>";

//Decimal to Octal conversion
echo "Decimal to Octal conversion :<br>";
$decToOctal = decoct(177);
echo "Octal of 177 is $decToBinary.";
echo "<br><br>";

//Decimal to HexaDecimal conversion
echo "Decimal to HexaDecimal conversion :<br>";
$decToHex = dechex(234);
echo "HexaDecimal of 234 is $decToBinary.";
echo "<br><br>";

//Binary to Octal conversion
echo "Binary to Octal conversion :<br>";
$bin = 101010;
echo base_convert($bin, 2, 8);
echo "<br><br>";

//Octal to Binary conversion
echo "Octal to Binary conversion :<br>";
$oct = 7654;
echo base_convert($oct, 8, 2);
echo "<br><br>";

//Quadrants in which a given coordinate lies
echo "Quadrants in which a given coordinate lies : <br>";
$x = 8;
$y = -10;

if ($x > 0 && $y > 0) {
    echo "$x and $y lies in 1st quandrant.";
} elseif ($x < 0 && $y > 0) {
    echo "$x and $y lies in 2nd quandrant.";
} elseif ($x < 0 && $y < 0) {
    echo "$x and $y lies in 3rd quandrant.";
} elseif ($x > 0 && $y < 0) {
    echo "$x and $y lies in 4th quandrant.";
} elseif ($x != 0 && $y == 0) {
    echo "$x and $y on x-axis.";
} elseif ($x == 0 && $y != 0) {
    echo "$x and $y on y-axis.";
} else {
    echo "$x and $y lies at origin.";
}
echo "<br><br>";

//Permutations in which n people can occupy r seats in a classroom
echo "Permutations in which n people can occupy r seats in a classroom :<br>";
function factorial($num) {
    $fact = 1;
    for ($i = $num; $i >= 1; $i--) {
        $fact *= $i;
    }
    return $fact;
}
$n = 5;
$r = 9;
echo "Number of people : $n and Number of seates : $r<br>";
$permute = factorial($n)/factorial($n - $r);
echo "Total possible arrangements are $permute.";
echo "<br><br>";

//Maximum number of handshakes
echo "Maximum number of handshakes :<br>";
$num = 10;
$total = $num * ($num - 1) / 2;
echo "For $num people there will be $total handshakes.";
echo "<br><br>";

//Addition of two fractions:
echo "Addition of two fractions :<br>";

echo "<br><br>";

//Replace all 0’s with 1 in a given integer
echo "Replace all 0’s with 1 in a given integer :<br>";
function convert0to1rec($num) {
    if ($num == 0) 
        return 0; 
    $digit = ($num % 10);
    if ($digit == 0) 
        $digit = 1; 
    return convert0to1rec((int)($num / 10)) * 10 + $digit; 
}
function convert0to1($num) 
{ 
    if ($num == 0) 
        return 1; 
    else
        return convert0to1rec($num); 
}
$num = 10120;
echo (convert0to1($num));
echo "<br><br>";


echo "<br><br>";

//Area of Circle
echo "Area of Circle :<br>";
$r = 5;
$pi = 3.14;
$area = $pi * $r * $r;
echo "Area of Circle is $area.";
echo "<br><br>";

//Octal to Binary conversion
echo "Octal to Binary conversion :<br>";

echo "<br><br>";
?>