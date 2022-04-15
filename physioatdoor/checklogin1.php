<?php

session_start();
require 'dbconnect.php';
if(!isset($_POST['phy_login']))
{
	header("location:login.php");
	exit();
}
$email=$_POST['email'];
$password=$_POST['password'];

$qry="SELECT * FROM table_physio_reg where email='".$email."' and password='".$password."' and isactive=1";
$rs1=mysqli_query($conn,$qry);
if(mysqli_num_rows($rs1)>0)
{
	$row=mysqli_fetch_assoc($rs1);
	$physioid=$row['physio_id'];
	$_SESSION['physioid']=$physioid;
	if($row['user_type'] == 2)
	{
		header("location:index1.php");
		exit();	
	}
	
	
	
}
else
{
	echo "no record found";
}


?>