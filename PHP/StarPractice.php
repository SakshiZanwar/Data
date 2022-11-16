<?php
//Sqaure star pattern
echo "Sqaure Star Pattern: <br>";
for($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 3; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//Hollow Square Star Pattern
echo "Hollow Square Star Pattern: <br>";
for($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 3; $j++) {
        if ($i == 0 || $i == 3 || $j == 0 || $j == 3) {
            echo "*";
        }
        else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>";

//Rhombus Star Pattern
echo "Rhombus Star Pattern: <br>";
for($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j <= 3; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//Rectangle Star Pattern
echo "Rectangle Star Pattern: <br>";
for($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 6; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//Hollow Rectangle Star Pattern
echo "Hollow Rectangle Star Pattern: <br>";
for($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= 5; $j++) {
        if ($i == 0 || $i == 3 || $j == 0 || $j == 5) {
            echo "*";
        }
        else {
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}
echo "<br>";

//Parallelogram Star Pattern
echo "Parallelogram Star Pattern: <br>";
for($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;";
    }
    for ($j = 0; $j <= 5; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//Mirrored Rhombus Star Pattern
echo "Mirrored Rhombus Star Pattern: <br>";
for($i = 0; $i <= 3; $i++) {
    for ($j = 4; $j > $i + 1; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 0; $j <= 3; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//Triangle Star Pattern
echo "Triangle Star Pattern: <br>";
for($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//Pyramid Star Pattern
echo "Pyramid Star Pattern: <br>";
for($i = 0; $i <= 3; $i++) {
    for ($j = 4; $j > $i + 1; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 0; $j < (2 * $i) + 1; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//Hollow Pyramid Star Pattern
echo "Hollow Pyramid Star Pattern: <br>";
for ($i = 1; $i <= 4; $i++) {
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
echo "<br>";

//Inverted Pyramid Star Pattern
echo "Inverted Pyramid Star Pattern: <br>";
for($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 0; $j < 2 * (4 - $i) - 1; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";


//Inverted Hollow Pyramid Star Pattern
echo "Inverted Hollow Pyramid Star Pattern: <br>";
for ($i = 4; $i > 0; $i--) {
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
echo "<br>";

//Half Diamond Star Pattern
echo "Half Diamond Star Pattern: <br>";
for($i = 0; $i <= 3; $i++) {
    for ($j = 0; $j <= $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for($i = 0; $i < 3; $i++) {
    for ($j = 3; $j > $i; $j--) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//Half Diamond Star Pattern Inverted
echo "Half Diamond Star Pattern Inverted: <br>";
for($i = 1; $i <= 4; $i++) {
    for ($j = 0; $j < 4 - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for($i = 1; $i < 4; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 0; $j < 4 - $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//Diamond Star Pattern
echo "Pyramid Star Pattern: <br>";
for($i = 1; $i <= 4; $i++) {
    for ($j = 4; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = 0; $j < $i * 2 - 1; $j++) {
        echo "*";
    }
    echo "<br>";
}
for($i = 1; $i <= 3; $i++) {
    for ($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($j = (4 - $i) * 2 - 1; $j > 0; $j--) {
        echo "*";
    }
    echo "<br>";
}
echo "<br>";

//Pattern 1
echo "Pattern 1 : Basic Square 1 Pattern<br>";
for($i = 0; $i < 4; $i++) { 
    for($j = 0; $j < 4; $j++){ 
        echo "1"; 
    }
    echo "<br>";
}
echo "<br>";

//Pattern 2
echo "Pattern 2 : Basic Square incrementing Pattern<br>";
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
echo "Pattern 3 : Internal varsity square Pattern<br>";
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
echo "Pattern 4 : Basic Right Triangle Number Pattern<br>";
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
echo "Pattern 5 : Basic Right Triangle Number Pattern (Inverted)<br>";
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
echo "Pattern 6 : Basic incrementing Triangle Pattern initialised = 3<br>";
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
echo "Pattern 7 : Basic incrementing Triangle Pattern(Inverted) initialised = 3<br>";
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
echo "Pattern 8 : Basic double incrementing Triangle Pattern initialised = 3<br>";
$a = 3;
for($i = 0; $i < 4; $i++) { 
    for($j = 0; $j < $i+1; $j++){ 
        echo "$a "; 
        $a++;  
    }
    echo "<br>";
}
echo "<br>";

//Pattern 9
echo "Pattern 9 : Basic incrementing Diamond Pattern(Inverted) initialised = 3<br>";
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
echo "Pattern 10 : Basic double incrementing Triangle Pattern initialised = 3<br>";
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
echo "Pattern 11 : Basic incrementing Triangle Pattern(Inverted) initialised Mirrored = 3<br>";
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
echo "Pattern 12 : Basic incrementing Diamond Pattern(Inverted Sandwich) initialised = 3<br>";
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
echo "Pattern 13 : Basic double incrementing Triangle Pattern initialised Sandwich= 3<br>";
$r = 8;
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
echo "Pattern 14 : Basic incrementing Triangle Pattern(Inverted) initialised Mirrored Sandwich = 3<br>";
$N = 4;
$a = 2;
for($i = 1;$i <= $N;$i++) {
    $a = (($i*($i+1))/2) + 1;
    for($j = 1;$j < $i;$j++) {
        echo $a;
        $a--;
    }
    echo $a;
    $a--;
    echo "<br>";
}
$N = 4;
$a =12;
for ($i = 0; $i < $N; $i++) {
    for ($j = $N;$j > $i;$j--) {
        $a--;
        echo $a;
    }
    echo "<br>";
}
echo "<br>";
?>