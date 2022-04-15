<?php
require 'dbconnect.php';
$state=$_POST['state_id'];
$city=$_POST['city_id'];
$area=$_POST['area_name'];
$date=date('y-m-d');
$id=$_POST['id'];
$qry="UPDATE table_area SET state_id='".$state."',city_id='".$city."',area_name='".$area."',dou='".$date."' where area_id='".$id."'";
$rs=mysqli_query($conn,$qry);
if($rs){
	//echo "success";
	header("location:viewArea.php");
}
else
{
	echo "error";
}
?>