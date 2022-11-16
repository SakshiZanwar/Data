<?php
//Pattern 1
echo "Pattern 1: Square Star Pattern<br>";
for($i = 0; $i < 4; $i++) { //loop for rows
    for($j = 0; $j < 4; $j++){ //loop for columns
        echo "*"; //print * in column
    }
    echo "<br>";
}echo "<br>";

//Pattern 2
echo "Pattern 2: Hollow Square Star Pattern<br>";
for($i = 0; $i < 4; $i++) { //loop for rows
    for($j = 0; $j < 4; $j++){ //loop for columns
        if($i == 0 || $j == 0 || $i == 4-1 || $j == 4-1) { //condition
            echo "*"; //print * in column
        }
        else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}echo "<br>";

//Pattern 3
echo "Pattern 3: Rhombus Star Pattern<br>";
for($i = 0; $i < 4; $i++) { //loop for rows
    for($j = 0; $j < $i; $j++){ //loop for space
        echo "&nbsp;&nbsp;";
    }
    for($j = 0; $j < 4; $j++) { //loop for print star
        echo "*";
    }
    echo "<br>";
}echo "<br>";

//Pattern 4
echo "Pattern 4: Rectangle Star Pattern<br>";
for($i = 0; $i < 4; $i++) { //loop for rows
    for($j = 0; $j < 6; $j++){ //loop for columns
        echo "*"; //print * in column
    }
    echo "<br>";
}echo "<br>";

//Pattern 5
echo "Pattern 5: Hollow Rectangle Star Pattern<br>";
for($i = 0; $i < 4; $i++) { //loop for rows
    for($j = 0; $j < 6; $j++){ //loop for columns
        if($i == 0 || $i == 4-1 || $j == 0 || $j == 6-1) { //condition
            echo "*"; //print * in column
        }
        else{
            echo "&nbsp;&nbsp;";
        }
    }
    echo "<br>";
}echo "<br>";

//Pattern 6
echo "Pattern 6: Parallelogram Star Pattern<br>";
for($i = 0; $i < 4; $i++) { //loop for rows
    for($j = 0; $j < $i; $j++){ //loop for space
        echo "&nbsp;&nbsp;";
    }
    for($j = 0; $j < 6; $j++) { //loop for print star
        echo "*";
    }
    echo "<br>";
}echo "<br>";

//Pattern 7
echo "Pattern 7: Mirrored Rhombus Star Pattern<br>";
for($i = 0; $i < 4; $i++) { 
    for($j = 4; $j > $i+1; $j--){ 
        echo "&nbsp;&nbsp;";
    }
    for($j = 0; $j < 4; $j++) { 
        echo "*";
    }
    echo "<br>";
}echo "<br>";

//Pattern 8
echo "Pattern 8: Triangle Star Pattern<br>";
for($i = 0; $i < 4; $i++) { 
    for($j = 0; $j < $i + 1; $j++){ 
        echo "*"; 
    }
    echo "<br>";
}echo "<br>";

//Pattern 9
echo "Pattern 9: Pyramid Star Pattern<br>";
for($i = 1; $i <= 4; $i++) {
    // print spaces
    for($j = $i; $j < 4; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // print stars
    for($j = 1; $j < (2 * $i); $j++) {
        echo "*";
    }
    echo "<br>";
}echo "<br>";

//Pattern 10
echo "Pattern 10: Hollow Pyramid Star Pattern<br>";
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
}echo "<br>";

//Pattern 11
echo "Pattern 11: Inverted Pyramid Star Pattern<br>";
for($i = 0; $i < 4; $i++) {
    // print spaces
    for($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    // print stars
    for($j = 0; $j < 2 * (4 - $i) - 1; $j++) {
        echo "*";
    }
    echo "<br>";
}echo "<br>";

//Pattern 12
echo "Pattern 12: Inverted Hollow Pyramid Star Pattern<br>";
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
}echo "<br>";

//Pattern 13
echo "Pattern 13: Half Diamond Star Pattern<br>";
for($i = 1; $i <= 4; $i++) {
    for($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for($i = 1; $i < 4; $i++) {
    for($j = 0; $j < 4 - $i; $j++) {
        echo "*";
    }
    echo "<br>";
}echo "<br>";

//Pattern 14
echo "Pattern 14: Half Diamond Star Pattern Inverted<br>";
for($i = 1; $i <= 4; $i++) {
    for($j = 0; $j < 4 - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for($j = 0; $j < $i; $j++) {
        echo "*";
    }
    echo "<br>";
}
for($i = 1; $i < 4; $i++) {
    for($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for($j = 0; $j < 4 - $i; $j++) {
        echo "*";
    }
    echo "<br>";
}echo "<br>";

//Pattern 15
echo "Pattern 15: Diamond Star Pattern<br>";
for($i = 1; $i <= 4; $i++) {
    for($j = 4; $j > $i; $j--) {
        echo "&nbsp;&nbsp;";
    }
    for($j = 0; $j < $i * 2 - 1; $j++) {
        echo "*";
    }
    echo "<br>";
}
for($i = 1; $i <= 3; $i++) {
    for($j = 0; $j < $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for($j = (4 - $i) * 2 - 1; $j > 0; $j--) {
        echo "*";
    }
    echo "<br>";
}echo "<br>";
?>