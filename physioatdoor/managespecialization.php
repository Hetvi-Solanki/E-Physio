<?php
require 'dbconnect.php';
// exit();
var_dump($_POST);
// echo $_GET['state_name'];
if(isset($_POST['add_spec']))
{
	$date=date('y-m-d');
	$qry="INSERT INTO table_specialization(degree_id,spec_name,doi,isactive,dou) values('".$_POST['degree_id']."','".$_POST['spec_name']."','".$date."',1,'".$date."')";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "success";
		header("location:viewSpecialization.php");
		exit();
	}
	else{
		echo "error";
	}
}
if(isset($_GET['deleteid']))
{
	$date=date('y-m-d');
	$qry="UPDATE table_specialization SET isactive=2 where spec_id='".$_GET['deleteid']."'";
	// echo $qry;
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "successs";
		header("location:viewSpecialization.php");
		exit();
	}
	else
	{
		echo "error";
	}
}
if(isset($_GET['actionid']))
{
	$date=date('y-m-d');
	// $qry="SELECT * FROM table_state where state_id='".$_GET['actionid']."'";
	// $rs=mysqli_query($conn,$qry);
	// $row=mysqli_fetch_assoc($rs);

	$isactive=$_GET['isactive'];

	if($isactive == 1){

		$qry="UPDATE table_specialization SET isactive=0,dou='".$date."' where spec_id='".$_GET['actionid']."'";
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewSpecialization.php");
			exit();
		}
	}
	if($isactive == 0)
	{
		$qry="UPDATE table_specialization SET isactive=1,dou='".$date."' where spec_id='".$_GET['actionid']."'";
	// echo $qry;
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewSpecialization.php");
			exit();
		}
	}

}
?>