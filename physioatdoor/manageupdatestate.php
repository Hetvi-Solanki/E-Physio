<?php
require 'dbconnect.php';

$state=$_POST['state_name'];
$date=date('y-m-d');
$id=$_POST['id'];
$qry="UPDATE table_state SET state_name='".$state."',dou='".$date."' where state_id='".$id."'";
$rs=mysqli_query($conn,$qry);
if($rs){
	header("location:viewState.php");
}
else
{
	echo "error";
}
?>