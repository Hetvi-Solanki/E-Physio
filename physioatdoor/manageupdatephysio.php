<?php
session_start();
require 'dbconnect.php';
$physio_name=$_POST['physio_name'];

$physio_dob=$_POST['physio_dob'];
$email=$_POST['email'];
$total_exp=$_POST['total_exp'];
$cont_no=$_POST['cont_no'];
$address=$_POST['address'];
$state=$_POST['state_id'];
$city=$_POST['city_id'];
$area=$_POST['area_id'];
$degree=$_POST['degree_id'];
$specialization=$_POST['spec_id'];

$date=date('y-m-d');

// $qry="UPDATE table_physio_reg SET physio_name='".$physio_name."',physio_dob='".$physio_dob."',email='".$email."',cont_no='".$cont_no."',address='".$address."',state_id='".$state."',city_id='".$city."',area_id='".$area."',total_exp='".$total_exp."',degree_id='".$degree."',spec_id='".$specialization."',dou='".$date."' where physio_id='".$_SESSION['physioid']."'";
	
// 	$rs=mysqli_query($conn,$qry);
// 	if($rs){
// 	//echo "success";
// 		header("location:index.php");
// 	}
// 	else
// 	{
// 		echo "error";
// 	}
if($_FILES['image']['name'] == "") 
{

	$qry="UPDATE table_physio_reg SET physio_name='".$physio_name."',physio_dob='".$physio_dob."',email='".$email."',cont_no='".$cont_no."',address='".$address."',state_id='".$state."',city_id='".$city."',area_id='".$area."',total_exp='".$total_exp."',degree_id='".$degree."',spec_id='".$specialization."',dou='".$date."' where physio_id='".$_SESSION['physioid']."'";
	
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
elseif ($_FILES['image1']['name'] == "") 
{
	$target_dir = "assets/images/profile/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


	$qry="UPDATE table_physio_reg SET physio_name='".$physio_name."',physio_dob='".$physio_dob."',email='".$email."',cont_no='".$cont_no."',address='".$address."',state_id='".$state."',city_id='".$city."',area_id='".$area."',total_exp='".$total_exp."',degree_id='".$degree."',spec_id='".$specialization."',photo='".$_FILES["image"]["name"]."',dou='".$date."' where physio_id='".$_SESSION['physioid']."'";

	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
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
	$target_dir = "assets/images/profile/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);
	move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

	$target_dir1 = "assets/images/document/";
	$target_file1 = $target_dir1 . basename($_FILES["image1"]["name"]);
	move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);


	$qry="UPDATE table_physio_reg SET physio_name='".$physio_name."',physio_dob='".$physio_dob."',email='".$email."',cont_no='".$cont_no."',address='".$address."',state_id='".$state."',city_id='".$city."',area_id='".$area."',doc_upload='".$target_file1."',total_exp='".$total_exp."',degree_id='".$degree."',spec_id='".$specialization."',photo='".$target_file."',dou='".$date."' where physio_id='".$_SESSION['physioid']."'";
	
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
	//echo "success";
		header("location:index.php");
	}
	else
	{
		echo "error";
	}
}
?>