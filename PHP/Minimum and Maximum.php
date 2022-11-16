<?php
    $str = array("Demo","PHP","Testing",12,"Hello World, Welcome to the IKF!!!");    
    function strlen1($var) {
        return strlen($var);
    }
    $map = [];
    //array_map() function sends each value of an array to a user-made function, and 
    //returns an array with new values, given by the user-made function.
    
    foreach ($str as $key => $var) {
        $map[$key] = strlen1($str[$key]);
    }
    $str1 = $map;
    echo "Array before Sorting : ";
    print_r($str1);

    asort($str1);
    //asort() function sorts an associative array in ascending order, according to the value

    echo "<br/>Array after Sorting : ";
    print_r($str1);
    echo "<br/>";

    $min = reset($str1);
    //reset() function moves the internal pointer to the first element of the array
    var_dump($min);
    $minword = $str[key($str1)];
    //key() function returns the element key from the current internal pointer position.
    //This function returns FALSE on error

    $max = end($str1);
    //end() function moves the internal pointer to, and outputs, the last element in array.
    var_dump($max);
    $maxword = $str[key($str1)];
    echo "<br/><br/>Minimum array value : $minword<br/>Maximum array value : $maxword<br/>";
?>