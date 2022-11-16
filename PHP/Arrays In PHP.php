<?php

// Creating an associative array
$name_one = array("Zack"=>"Zara", "Anthony"=>"Any",
					"Ram"=>"Rani", "Salim"=>"Sara",
					"Raghav"=>"Ravina");

// Looping through an array using foreach
echo "Looping using foreach: <br>";
foreach ($name_one as $val => $val_value){
	echo "Husband is ".$val." and Wife is ".$val_value."<br>";
}
echo "<br>";
// Creating an associative array
$name_two["zack"] = "zara";
$name_two["anthony"] = "any";
$name_two["ram"] = "rani";
$name_two["salim"] = "sara";
$name_two["raghav"] = "ravina";
// Looping through an array using for
echo "\nLooping using for: <br>";
$keys = array_keys($name_two);
$round = count($name_two);

for($i=0; $i < $round; ++$i) {
	echo $keys[$i] . ' ' . $name_two[$keys[$i]] . "<br>";
}

?>
