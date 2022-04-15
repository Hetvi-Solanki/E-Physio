<?php
// var_dump($_POST);
session_start();

if(!isset($_SESSION['physioid']))
{
    header("location:login.php");
    exit();
}
require 'dbconnect.php';
// exit();
// var_dump($_GET);
// echo $_GET['state_name'];
if(isset($_POST['btn_media']))
{
	
	$target_dir = " ";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

	$date=date('y-m-d');
	$qry="INSERT INTO table_post_photo_video(physio_id,photo_video,title,description,treat_id,doi,isactive,dou) values('".$_SESSION['physioid']."','".$_FILES["image"]["name"]."','".$_POST['title']."','".$_POST['description']."','".$_POST['treat_id']."','".$date."',1,'".$date."')";
	$rs1=mysqli_query($conn,$qry);
	if($rs1)
	{
		// echo "success";
		header("location:viewmedia.php");
		exit();
	}
	else{
		echo "error";
	}
}
if(isset($_GET['deleteid']))
{
	$date=date('y-m-d');
	$qry="UPDATE table_post_photo_video SET isactive=2 where post_id='".$_GET['deleteid']."'";
	// echo $qry;
	$rs2=mysqli_query($conn,$qry);
	if($rs2)
	{
		// echo "successs";
		header("location:viewmedia.php");
		exit();
	}
	else
	{
		echo "error";
	}
}

?>