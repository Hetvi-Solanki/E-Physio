<?php
require 'dbconnect.php';
$state=$_POST['state_id'];
$city=$_POST['city_name'];

$date=date('y-m-d');
$id=$_POST['id'];
$qry="UPDATE table_cities SET state_id='".$state."',city_name='".$city."',dou='".$date."' where city_id='".$id."'";
//echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs){
	//echo "success";
	header("location:viewCity.php");
}
else
{
	echo "error";
}
?>