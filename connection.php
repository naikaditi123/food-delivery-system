<?php

$dbhost = "localhost";
$dbemail = "root";
$dbpass = "";
$dbname = "Foodie";

if(!$con = mysqli_connect($dbhost,$dbemail,$dbpass,$dbname))
{
	die("Failed to connect");
}
?>