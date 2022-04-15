<?php
session_start();
require 'dbconnect.php';
$u_fname=$_POST['u_fname'];
$u_lname=$_POST['u_lname'];
$dob=$_POST['dob'];
$email=$_POST['email'];
$age=$_POST['age'];
$gender=$_POST['gender'];
$cont_no=$_POST['cont_no'];
$address=$_POST['address'];
$state=$_POST['state_id'];
$city=$_POST['city_id'];
$area=$_POST['area_id'];

$date=date('y-m-d');

if($_FILES['image']['name'] == "")
{
	$qry="UPDATE table_patient_reg SET u_fname='".$u_fname."',u_lname='".$u_lname."',dob='".$dob."',email='".$email."',age='".$age."',gender='".$gender."',cont_no='".$cont_no."',address='".$address."',state_id='".$state."',city_id='".$city."',area_id='".$area."',dou='".$date."' where u_id='".$_SESSION['uid']."'";


	$rs=mysqli_query($conn,$qry);
	if($rs){
	//echo "success";
		header("location:index.php");
	}
	else
	{
		echo "error";
	}
}
else
{
	$target_dir = "profile/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
	

	$qry="UPDATE table_patient_reg SET u_fname='".$u_fname."',u_lname='".$u_lname."',dob='".$dob."',email='".$email."',age='".$age."',gender='".$gender."',photo='".$target_file."',cont_no='".$cont_no."',address='".$address."',state_id='".$state."',city_id='".$city."',area_id='".$area."',dou='".$date."' where u_id='".$_SESSION['uid']."'";

	
	$rs=mysqli_query($conn,$qry);
	if($rs){
	//echo "success";
		header("location:index.php");
	}
	else
	{
		echo "error";
	}
}

?>