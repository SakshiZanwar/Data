<?php

//Pattern 1
echo "Pattern 1<br>";
for($i = 0; $i < 4; $i++) { 
    for($j = 0; $j < 4; $j++){ 
        echo "1"; 
    }
    echo "<br>";
}
echo "<br>";

//Pattern 2
echo "Pattern 2<br>";
$x = 1;
for($i = 0; $i < 4; $i++) { 
    for($j = 0; $j < 4; $j++){ 
        echo $x;
    }
    echo "<br>";
    $x++;
}
echo "<br>";

//Pattern 3
echo "Pattern 3<br>";
for($i = 0;$i < 4;$i++) {
    if ($i == 0 || $i == 4-1) {
        for ($j = 0; $j < 3;$j++) {
            echo "3";
        }
    }
    else {
        for ($j = 0; $j < 3; $j++) {
            if ($j == 0 || $j ==2) {
                echo "3";
            }
            else {
                echo $i;
            }
        }
    }
    echo "<br>";
}
echo "<br>";

//Pattern 4
echo "Pattern 4<br>";
$a = 1;
for($i = 0; $i < 4; $i++) { 
    for($j = 0; $j < $i+1; $j++){
        echo $a; 
        $a++;
    }
    echo "<br>";
}
echo "<br>";

//Pattern 5
echo "Pattern 5<br>";
$a = 10;
for($i = 0; $i < 4; $i++) { 
    for($j = 4; $j > $i; $j--){ 
        echo $a; 
        $a--;
    }
    echo "<br>";
}
echo "<br>";

//Pattern 6
echo "Pattern 6<br>";
$a = 6;
for($i = 0; $i < 4; $i++) { 
    for($j = 4; $j > $i; $j--){ 
        echo $a; 
    }
    $a--;
    echo "<br>";
}
echo "<br>";

//Pattern 7
echo "Pattern 7<br>";
$a = 3;
for($i = 0; $i < 4; $i++) { 
    for($j = 0; $j < $i+1; $j++){ 
        echo $a; 
    }
    $a++;
    echo "<br>";
}
echo "<br>";

//Pattern 8
echo "Pattern 8<br>";
$a = 3;
for($i = 0; $i < 4; $i++) { 
    for($j = 0; $j < $i+1; $j++){ 
        echo $a."&nbsp;"; 
        $a++;  
    }
    echo "<br>";
}
echo "<br>";

//Pattern 9
echo "Pattern 9<br>";
$a = 3;
for($i = 1; $i <= 4; $i++) {
    for($j = 0; $j < $i; $j++) {
        echo $a;
    }
    echo "<br>";
    $a++;
}
$b = 5;
for($i = 1; $i < 4; $i++) {
    for($j = 0; $j < 4 - $i; $j++) {
        echo $b;
    }
    $b--;
    echo "<br>";
}
echo "<br>";

//Pattern 10
echo "Pattern 10<br>";
$N = 3;
$N--;
$r = 7;
for ($i = 0; $i < $r; $i++) {
    if ($i <= $r / 2) {
	    $count = $N + 1;
	    for ($j = 0; $j <= $i; $j++) {
            $N++;
		    echo $N;
	    }
	    echo "<br>";
    }
    else {
	    $N = $count - ($r - $i);
	    $count = $N;
	    for ($j = $i; $j < $r; $j++) {
		    echo $N;
		    $N++;
	    }
	    echo "<br>";
    }
}
echo "<br>";

//Pattern 11
echo "Pattern 11<br>";
$N1 = 3;
$N = 0;
$r = 7;
for ($i = 0; $i < $r; $i++) {
	if ($i <= $r / 2) {
		$N = $N1;
		for ($j = 0; $j <= $i; $j++) {
			$N++;
		}
		$N1 = $N;
		for ($j = 0; $j <= $i; $j++) {
			$N--;
			echo $N;
		}
		echo "<br>";
	}
	else {
	for ($j = $i; $j < $r; $j++) {
		$N--;
		echo $N;
	}
	echo "<br>";
	}
}
echo "<br>";

//Pattern 12
echo "Pattern 12<br>";
$a = 3;
$b = $a - 1;
for ($i = 1; $i <= $a+1; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $b;
    }
    echo "<br>";
    $b++;
}
for ($i = $a+1; $i >= 1; $i--) {
    $b--;
    for ($j = 1; $j <= $i; $j++) {
        echo $b;
    }
    echo "<br>";
}
echo "<br>";

//Pattern 13
echo "Pattern 13<br>";
$r = 8;
$count1;
$count=1;
for($i = 0;$i < $r;$i++) {
    if($i < $r/2) {
       $count1 = $count+1;
       for($j = 0;$j <= $i;$j++) {
           $count++;
           echo $count;
        }
        echo "<br>";
    }
    else {
       $count = $count1;
       for($j = 0;$j < $r- $i;$j++) 
         {
           echo $count;
           $count++;
         }
       $count1 = $count1 - ($r - $i) + 1;
       echo "<br>";
     }
}
echo "<br>";

//Pattern 14
echo "Pattern 14<br>";
$N = 4;
$a = 2;
for($i = 1; $i <= $N; $i++) {
    $a = (($i*($i+1))/2) + 1;
    for($j = 1; $j <= $i; $j++) {
        echo $a;
        $a--;
    }
    echo "<br>";
}
$N = 4;
$a =12;
for ($i = 0; $i < $N; $i++) {
    for ($j = $N; $j > $i; $j--) {
        $a--;
        echo $a;
    }
    echo "<br>";
}
echo "<br>";
?>