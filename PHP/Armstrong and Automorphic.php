<?php
//Armstrong number
echo "Armstrong number :<br>";
function countDigit($n)
{
    $count = 0;
    while ($n != 0)
    {
        $n = round($n / 10);
        ++$count;
    }
    return $count;
}
// function order($x) {
//     $len = 0;
//     while ($x) {
//         $len++;
//         $x = $x/10;
//     }
//     return $len;
// }
function getArmstrongSum($num ,$order) {
    if ($num == 0) {
        return 0;
    }
    $digit = $num % 10;
    
    return pow($digit, $order) + getArmstrongSum($num/10, $order);
}
$num = 1634;
$length = countDigit($num);
if ($num == getArmstrongSum($num, $length)) {
    echo "$num is Armstrong.";
} else {
    echo "$num is not Armstrong.";
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
?>