<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	//Returns the request method used to access the page (such as POST)
	//$_SERVER is a PHP super global variable which holds information about headers, paths, and script locations.
	if (isset($_FILES["files"]) && $_FILES["files"]["error"] == 0) {
		//isset => to check whether the user has uploaded a file when submitting a form using isset
		$file_name	 = $_FILES["files"]["name"];
		$file_type	 = $_FILES["files"]["type"];
		$file_size	 = $_FILES["files"]["size"];
		$file_tmp_name = $_FILES["files"]["tmp_name"];
		$file_error = $_FILES["files"]["error"];

		echo "File Name: ".$file_name ."<br>";
		echo "File type: ".$file_type ."<br>";
		echo "File size: ".$file_size ."<br>";
		echo "File temporary name: ".$file_tmp_name ."<br>";
		echo "File error: ".$file_error ."<br>";
	}
}
?>