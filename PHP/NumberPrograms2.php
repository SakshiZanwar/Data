<?php
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