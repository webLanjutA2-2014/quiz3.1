<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "penitipan";

$con = mysqli_connect($host, $user, $pass, $dbname);

if(mysqli_connect_errno())
	echo "Failed to connect : " . mysqli_connect_error();


?>