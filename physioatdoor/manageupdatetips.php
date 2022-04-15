<?php
require 'dbconnect.php';
$treat_id=$_POST['treat_id'];
$title=$_POST['title'];
$description=$_POST['description'];
$date=date('y-m-d');
$id=$_POST['id'];
$qry="UPDATE table_tips_post SET title='".$title."',description='".$description."',treat_id='".$treat_id."',dou='".$date."' where tips_id='".$id."'";
//echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs){
	//echo "success";
	header("location:viewtips.php");
}
else
{
	echo "error";
}
?>