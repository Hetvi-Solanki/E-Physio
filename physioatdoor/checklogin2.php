<?php
session_start();
require 'dbconnect.php';
if(!isset($_POST['admin_login']))
{
	header("location:login.php");
	exit();
}
$email=$_POST['email'];
$pass=$_POST['password'];

$qry="SELECT * FROM table_admin where email='".$email."' and password='".$pass."' and isactive=1";
$rs1=mysqli_query($conn,$qry);
if(mysqli_num_rows($rs1)>0)
{
	$row=mysqli_fetch_assoc($rs1);
	$uid=$row['id'];
	$_SESSION['uid']=$uid;
	if($row['user_type'] == 3)
	{
        //echo "hello admin!";
		header("location:dashboard.php");
		exit();	
	}
	
}
else
{
	echo "no record found";
}





?>