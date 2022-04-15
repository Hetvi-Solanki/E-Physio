<?php
require 'dbconnect.php';
if (isset($_POST['adddegree'])) 
{
	$date=date('y-m-d');
	$qry="INSERT INTO table_degree(degree_name,doi,dou,isactive) values('".$_POST['degree_name']."','".$date."','".$date."',1)";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "success";
		header("location:viewDegree.php");
		exit();
	}
	else
	{
		echo "error";
	}
}
if (isset($_GET['deleteid'])) 
{
	$date=date('y-m-d');
	$qry="UPDATE table_degree SET isactive=2 where degree_id='".$_GET['deleteid']."'";
	$rs=mysqli_query($conn,$qry);
	if ($rs) {
		header("location:viewDegree.php");
		exit();
	}
	else
	{
		echo "error";
	}
	
}
if (isset($_GET['actionid'])) 
{
	$date=date('y-m-d');
	$isactive=$_GET['isactive'];

	if($isactive==1)
	{
		$qry="UPDATE table_degree SET isactive=0,dou='".$date."' where degree_id='".$_GET['actionid']."'";
		$rs=mysqli_query($conn,$qry);
		if ($rs) {
			header("location:viewDegree.php");
			exit();
		}
		else
		{
			echo "error";
		}
	}
	if ($isactive==0) {
		$qry="UPDATE table_degree SET isactive=1,dou='".$date."' where degree_id='".$_GET['actionid']."'";
		$rs=mysqli_query($conn,$qry);
		if ($rs) {
			header("location:viewDegree.php");
			exit();
		}
		else
		{
			echo "error";
		}
	}
}
?>