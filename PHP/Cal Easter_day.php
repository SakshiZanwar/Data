<?php
// PHP program to demonstrate the
// working of easter_date() function
// when parameter is passed


$year = 2017;
echo date("M-d-Y", easter_date($year)), "<br>";

$year = 2010;
echo date("M-d-Y", easter_date($year)), "<br>";

$year = 2000;
echo date("M-d-Y", easter_date($year));
?>