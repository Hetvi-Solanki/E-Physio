<?php
require 'dbconnect.php';
// exit();
var_dump($_POST);
// echo $_GET['state_name'];
if(isset($_POST['add_area']))
{
	$date=date('y-m-d');
	$qry="INSERT INTO table_area(state_id,city_id,area_name,doi,isactive,dou) values('".$_POST['state_id']."','".$_POST['city_id']."','".$_POST['area_name']."','".$date."',1,'".$date."')";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "success";
		header("location:viewArea.php");
		exit();
	}
	else{
		echo "error";
	}
}
if(isset($_GET['deleteid']))
{
	$date=date('y-m-d');
	$qry="UPDATE table_area SET isactive=2 where area_id='".$_GET['deleteid']."'";
	// echo $qry;
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "successs";
		header("location:viewArea.php");
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

		$qry="UPDATE table_area SET isactive=0,dou='".$date."' where area_id='".$_GET['actionid']."'";
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewArea.php");
			exit();
		}
	}
	if($isactive == 0)
	{
		$qry="UPDATE table_area SET isactive=1,dou='".$date."' where area_id='".$_GET['actionid']."'";
	// echo $qry;
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewArea.php");
			exit();
		}
	}

}
?>