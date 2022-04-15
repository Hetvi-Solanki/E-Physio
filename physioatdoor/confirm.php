<?php
require 'dbconnect.php';
if($_POST['pass'] != $_POST['cpass'])
{
	echo "<script>alert('password and confirm password is not match');</script>";
	echo "<script>window.location='email.php';</script>";
	exit();
}
if($_POST['type'] == 1)
{
	$qry="UPDATE table_patient_reg SET password='".$_POST['pass']."' where email='".$_POST['email']."'";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		echo "<script>alert('Password reset successfully...');</script>";
		echo "<script>window.location='login.php';</script>";
	}
	else
	{
		echo "<script>alert('error found pleae try again....');</script>";
		echo "<script>window.location='email.php';</script>";
	}
}

if($_POST['type'] == 2)
{
	$qry="UPDATE table_physio_reg SET password='".$_POST['pass']."' where email='".$_POST['email']."'";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		echo "<script>alert('Password reset successfully...');</script>";
		echo "<script>window.location='login.php';</script>";
	}
	else
	{
		echo "<script>alert('error found pleae try again....');</script>";
		echo "<script>window.location='email.php';</script>";
	}
}

if($_POST['type'] == 3)
{
	$qry="UPDATE table_admin SET password='".$_POST['pass']."' where email='".$_POST['email']."'";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		echo "<script>alert('Password reset successfully...');</script>";
		echo "<script>window.location='login.php';</script>";
	}
	else
	{
		echo "<script>alert('error found pleae try again....');</script>";
		echo "<script>window.location='email.php';</script>";
	}
}
?>