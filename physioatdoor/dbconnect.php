<?php

$servername="localhost";
$username="root";
$password="Hetvi#2901";

$dbname="physioatdoor";

$conn=mysqli_connect($servername,$username,$password);

if (!$conn) {
	die("connection failed:". mysqli_connect_error());
}

$db=mysqli_select_db($conn,$dbname);

if ($db) {
	# code...
	//echo "database selected";
}
else
{
	//echo "database error";
}
?>