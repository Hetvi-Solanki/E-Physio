<?php
require 'dbconnect.php';

$degree=$_POST['degree_name'];

$date=date('y-m-d');
$id=$_POST['id'];
$qry="UPDATE table_degree SET degree_name='".$degree."',dou='".$date."' where degree_id='".$id."'";
//echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs){
	//echo "success";
	header("location:viewDegree.php");
}
else
{
	echo "error";
}
?>