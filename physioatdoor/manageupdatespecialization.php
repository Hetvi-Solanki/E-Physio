<?php
require 'dbconnect.php';
$degree=$_POST['degree_id'];
$spec_name=$_POST['spec_name'];

$date=date('y-m-d');
$id=$_POST['id'];
$qry="UPDATE table_specialization SET degree_id='".$degree."',spec_name='".$spec_name."',dou='".$date."' where spec_id='".$id."'";
//echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs){
	//echo "success";
	header("location:viewSpecialization.php");
}
else
{
	echo "error";
}
?>