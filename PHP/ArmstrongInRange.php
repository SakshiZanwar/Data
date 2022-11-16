<?php
function armstrongCheck($number){
	$sum = 0;
	$x = $number;
	while($x != 0)
	{
		$rem = $x % 10;
		$sum = $sum + $rem*$rem*$rem;
		$x = $x / 10;
	}
	if ($number == $sum)
		return 1;
	return 0;
}
$num = 1;
$num1 = 500;
for ($i = $num; $i <= $num1; $i++) {
    if (armstrongCheck($i)){
	    echo $i;
        echo "<br>";
    }
}
?>