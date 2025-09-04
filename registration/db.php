<?php

$host = "localhost";
$user = "root"; 
$pass = "";
$dbname = "vivacity_student";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
	echo "Could't connect";
}





?>