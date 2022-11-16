<?php
//NumStar Pattern 1
echo "NumStar Pattern 1";
echo "<br>";
$a = 1;
for($i = 0; $i < 4; $i++) { 
    for($j = 0; $j < 4; $j++){ 
        if ($j == 4 - 1) {
            echo $a;
            $a++;
        }
        else {
            echo $a."*"; 
            $a++;
        } 
    }
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 2
echo "NumStar Pattern 2";
echo "<br>";
$a = 12;
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j <4; $j++) {
        $a++;
        if ($j == 4-1) {
            echo $a;
        }
        else {
            echo $a."*";
        }
    }
    $a = $a - 2 * 4;
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 3
echo "NumStar Pattern 3";
echo "<br>";

echo "<br>";

//NumStar Pattern 4
echo "NumStar Pattern 4";
echo "<br>";
$n = 4;
$p = $n;
for ($i=1; $i <= $n; $i+=2) {
    $k = ($i-1)*$n+1;
    for($j=0; $j <$n-1;$j++) {
        echo $k."*";
        $k++;
    }
    echo $k;
    echo "<br>";
}

for ($i = $p; $i > 0; $i-=2) {
    $k=($i-1)*$n+1;
    for($j = 0; $j < $n -1; $j++) {
        echo $k."*";
        $k++;
    }
    echo $k;
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 5
echo "NumStar Pattern 5";
echo "<br>";
$n = 5;
$p = $n;
for ($i=1; $i <= $n; $i+=2) {
    $k = ($i-1)*$n+1;
    for($j = 0; $j < $n - 1;$j++) {
        echo $k."*";
        $k++;
    }
    echo $k."&nbsp;";
    echo "<br>";
}
if($n%2!=0) {
    $p = $n-1;
}
for ($i = $p; $i > 0; $i-=2) {
    $k=($i-1)*$n+1;
    for($j = 0; $j < $n -1; $j++) {
        echo $k."*";
        $k++;
    }
    echo $k."&nbsp;";
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 6
echo "NumStar Pattern 6";
echo "<br>";
$r = 4;
$count = 5;
for($i = 0;$i < $r;$i++) {
    if($i == 1) {
        $count += $r + $r + $r;
    }
    if($i == $r - 1) {
        $count = 4 * $r + 1;
    }
    for($j = 0;$j < $r;$j++) {
        $count--;
        if($j == $r - 1) {
            echo $count;
        }
        else {
            echo $count."*";
        }
    }
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 7
echo "NumStar Pattern 7";
echo "<br>";
$a = 0;
for($i = 0; $i < 4; $i++) { 
    for($j = 0; $j <= $i; $j++){ 
        $a++;
        if ($j != 0)
        echo "*".$a; 
        else
        echo $a;
    }
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 8
echo "NumStar Pattern 8";
echo "<br>";
$r = 4;
$count=10;
$count1;
for($i=0;$i<$r;$i++) {
    $count=$count-$r+$i;
    $count1=$count;
    for($j=$r;$j>$i;$j--) {
       $count++;
       if($j!=$r)
       echo "*".$count;
       else
       echo $count;
    }
    echo "<br>";
    $count = $count1;
}
echo "<br>";

//NumStar Pattern 9
echo "NumStar Pattern 9";
echo "<br>";
$r = 4;
$count=0;
$count1=3;
for($i = 0;$i < $r/2;$i++) {
    for($j = 0;$j <= $i;$j++) {
        $count++;
        if($j != 0) { 
            echo "*".$count;
        }
        else {
            echo $count;
        }
    }
    echo "<br>";
    for($j = 0;$j <= $i+2;$j++) {
        $count1++;
        if($j != 0) {
            echo "*".$count1;
        }
        else {
            echo $count1;
        }
    }
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 10
echo "NumStar Pattern 10";
echo "<br>";
$N = 4;
$a = 1;
for($i = 1;$i <= $N;$i++) {
    $a = ($i*($i+1))/2;
    for($j = 1;$j < $i;$j++) {
        echo $a."*";
        $a--;
    }
    echo $a;
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 11
echo "NumStar Pattern 11";
echo "<br>";
$r = 4;
$count =11;
for ($i = 0; $i < $r; $i++) {
    for ($j = $r;$j > $i;$j--) {
        $count--;
        if ($j != $r) {
            echo "*".$count;
        }
        else {
            echo $count;
        }
    }
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 12
echo "NumStar Pattern 12";
echo "<br>";
$count = 0;
$count1 = 3;
$r = 4;
for($i = 0;$i < $r/2;$i++) {
    for($j = 0;$j <= $i;$j++) {
        $count++;
        if($j != 0) { 
            echo "*".$count;
        }
        else {
            echo $count;
        }
    }
    echo "<br>";
    for($j = 0;$j <= $i+2;$j++) {
        $count1++;
        if($j != 0) {
            echo "*".$count1;
        }
        else {
            echo $count1;
        }
    }
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 13
echo "NumStar Pattern 13";
echo "<br>";
$r = 7;
for ($i = 0; $i < $r; $i++) {
    if ($i <= ($r/2)) {
        for ($j = 0; $j <= $i;$j++) {
            if ($j!=0) {
                echo "*".($i+1);
            }
            else {
                echo ($i+1);
            }
        }
    }
    else {
        for ($j = $i; $j < $r; $j++) {
            if($j != $i) {
                echo "*".($r-$i);
            }
            else {
                echo ($r-$i);
            }
        }
    }
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 14
echo "NumStar Pattern 14";
echo "<br>";
$N = 4;
$count=0;
for($i=1;$i<=$N;$i++) {
    $k=1;
    for($j=0;$j<$i;$j++) {
        echo $i;
        if($k < $i) {
            echo "*";
            $k = $k + 1;
        }
    }
    echo "<br>";
}
for($i=$N;$i > 0;$i--) {
    $k=1;
    for($j=0;$j<$i;$j++) {
        echo $i;
        if($k < $i) {
            echo "*";
            $k = $k + 1;
        }
    }
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 15
echo "NumStar Pattern 15";
echo "<br>";
$N = 4;
$count=0;
for($i=$N;$i > 0;$i--) {
    $k=1;
    for($j=0;$j<$i;$j++) {
        echo $i;
        if($k < $i) {
            echo "*";
            $k = $k + 1;
        }
    }
    echo "<br>";
}
for($i=1;$i<=$N;$i++) {
    $k=1;
    for($j=0;$j<$i;$j++) {
        echo $i;
        if($k < $i) {
            echo "*";
            $k = $k + 1;
        }
    }
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 16
echo "NumStar Pattern 16";
echo "<br>";
$r = 5;
for ($i = 0; $i < $r; $i++) {
    if ($i <= ($r/2)) {
        for ($j = 0; $j <= $i;$j++) {
            if ($j!=0) {
                echo "*".($i+2);
            }
            else {
                echo ($i+2);
            }
        }
    }
    else {
        for ($j = $i; $j < $r; $j++) {
            if($j != $i) {
                echo "*".($r-$i+1);
            }
            else {
                echo ($r-$i+1);
            }
        }
    }
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 17
echo "NumStar Pattern 17";
echo "<br>";
$N = 3;
$count=0;
for($i=1;$i<=$N;$i++) {
    $k=1;
    for($j=0;$j<$i;$j++) {
        echo $i+1;
        if($k < $i) {
            echo "*";
            $k = $k + 1;
        }
    }
    echo "<br>";
}
for($i=$N;$i > 0;$i--) {
    $k=1;
    for($j=0;$j<$i;$j++) {
        echo $i+1;
        if($k < $i) {
            echo "*";
            $k = $k + 1;
        }
    }
    echo "<br>";
}
echo "<br>";

//NumStar Pattern 18
echo "NumStar Pattern 18";
echo "<br>";
$N = 4;
$count=0;
for($i=$N;$i > 0;$i--) {
    $k=1;
    for($j=0;$j<$i;$j++) {
        echo $i+2;
        if($k < $i) {
            echo "*";
            $k = $k + 1;
        }
    }
    echo "<br>";
}
for($i=1;$i<=$N;$i++) {
    $k=1;
    for($j=0;$j<$i;$j++) {
        echo $i+2;
        if($k < $i) {
            echo "*";
            $k = $k + 1;
        }
    }
    echo "<br>";
}
echo "<br>";

?>