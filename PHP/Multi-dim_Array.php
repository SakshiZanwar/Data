<?php
// Creating a 2 dimensional array
$multiDim = array(array(
                array(2,5,7,8),
                array(1,2,3,1),
                array(4,5,0,1)));

// echo var_dump($multiDim);
// echo $multiDim[1][2];

// Printing the contents of a 2 dimensional array

// for ($i=0; $i < count($multiDim); $i++) { 
//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }

echo "Printing the contents of a 3 dimensional array:<br>";
for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { 
	    for ($k = 0; $k < count($multiDim[$i][$j]); $k++) {
        	echo $multiDim[$i][$j][$k];
        	echo " ";
	    }
        echo "<br>";
    }
}
?>