<?php
require 'dbconnect.php';
$title=$_POST['title'];
$description=$_POST['description'];
$treat_id=$_POST['treat_id'];
$date=date('y-m-d');
$id=$_POST['id'];

if($_FILES['image']['name'] == "")
{
	$qry="UPDATE table_post_photo_video SET title='".$title."',description='".$description."',treat_id='".$treat_id."',dou='".$date."' where post_id='".$id."'";
	$rs=mysqli_query($conn,$qry);
	if($rs){
	//echo "success";
		header("location:viewmedia.php");
	}
	else
	{
		echo "error";
	}
}
else
{
	$target_dir = "assets/media/";
$target_file = $target_dir . basename($_FILES["image"]["name"]);
move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
	$qry="UPDATE table_post_photo_video SET title='".$title."',photo_video='".$_FILES["image"]["name"]."',description='".$description."',treat_id='".$treat_id."',dou='".$date."' where post_id='".$id."'";
	
	$rs=mysqli_query($conn,$qry);
	if($rs){
	//echo "success";
		header("location:viewmedia.php");
	}
	else
	{
		echo "error";
	}
}



?>