<?php

$str = "Hello, Welcome to the World! Lorem Ipsum is simply dummied text of 
the printing and typesetting industry. Lorem Ipsum has been the industry's 
standard dummy text ever since the 1500s when an unknown printer took a galley 
of type and scrambled it to make a type specimen book. Hello, Welcome to the World! 
Lorem Ipsum is simply dummied text of the printing and typesetting industry. Lorem 
Ipsum has been the industry's standard dummy text ever since the 1500s when an unknown 
printer took a galley of type and scrambled it to make a type specimen book. Hello, 
Welcome to the World! ";

echo("Original string :<br/>$str<br/><br/>");

$arr = explode(' ',$str);
echo sizeof($arr)."<br/><br/>";

for($i = 0; $i < 30; $i++) {
	echo $arr[$i]." ";
}
?>