<?php
require 'dbconnect.php';
$title=$_POST['treat_name'];
$description=$_POST['description'];
$date=date('y-m-d');
$id=$_POST['id'];
$target_dir = "assets/img/treatment/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
if($_FILES['image']['name'] == "")
{
	$qry="UPDATE table_treatment SET treat_name='".$title."',description='".$description."',dou='".$date."' where treat_id='".$id."'";
	$rs=mysqli_query($conn,$qry);
	if($rs){
	//echo "success";
		header("location:viewTreatment.php");
	}
	else
	{
		echo "error";
	}
}
else
{
	$qry="UPDATE table_treatment SET treat_name='".$title."',image='".$target_file."',description='".$description."',dou='".$date."' where treat_id='".$id."'";
	$rs=mysqli_query($conn,$qry);
	if($rs){
	//echo "success";
		header("location:viewTreatment.php");
	}
	else
	{
		echo "error";
	}
}



?>