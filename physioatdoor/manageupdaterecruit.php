<?php
require 'dbconnect.php';
$title=$_POST['title'];
$description=$_POST['description'];
$date=date('y-m-d');
$id=$_POST['id'];

if($_FILES['image']['name'] == "")
{
	$qry="UPDATE table_recruitment SET title='".$title."',description='".$description."',dou='".$date."' where recruit_id='".$id."'";
	$rs=mysqli_query($conn,$qry);
	if($rs){
	//echo "success";
		header("location:viewRecruitment.php");
	}
	else
	{
		echo "error";
	}
}
else
{
	$target_dir = "assets/img/post/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
	$qry="UPDATE table_recruitment SET title='".$title."',image='".$target_file."',description='".$description."',dou='".$date."' where recruit_id='".$id."'";
	
	$rs=mysqli_query($conn,$qry);
	if($rs){
	//echo "success";
		header("location:viewRecruitment.php");
	}
	else
	{
		echo "error";
	}
}



?>