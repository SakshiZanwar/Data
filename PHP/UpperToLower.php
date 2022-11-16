<?php

function lowercase($str) {
	$chars  = str_split($str); //str_split() function splits a string into an array
	$result = '';
	for ($i = 0; $i < count($chars); $i++) { //count() function returns number of elements in an array and
        //strlen() function returns the length of a string
        $ch = ord($chars[$i]); //ord() function returns the ASCII value of the first character of a string
        if ($chars[$i] >= 'A' && $chars[$i] <= 'Z')
        $result .= chr($ch + 32); //chr() function returns a character from the specified ASCII value
        //.= => Concatenation assignment. It appends $txt2 to $txt1.
        else
        $result .= $chars[$i];
	}
    return $result;
}

$value = "HELLO WORLD!! WELCOME TO IKF!!";
echo "Before Converting to Upper To Lower Case:-<br>". $value."<br>";
echo "<br>After Converting to Upper To Lower Case:-<br>";
echo lowercase($value);
echo "<br>";

echo chr(97)."<br/>";
echo ord(9);
?>