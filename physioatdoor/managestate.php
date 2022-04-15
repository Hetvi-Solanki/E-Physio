<?php
require 'dbconnect.php';
// exit();
// var_dump($_GET);
// echo $_GET['state_name'];
if(isset($_POST['addstate']))
{
	$date=date('y-m-d');
	$qry="INSERT INTO table_state(state_name,doi,isactive,dou) values('".$_POST['state_name']."','".$date."',1,'".$date."')";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "success";
		header("location:viewState.php");
		exit();
	}
	else{
		echo "error";
	}
}
if(isset($_GET['deleteid']))
{
	$date=date('y-m-d');
	$qry="UPDATE table_state SET isactive=2 where state_id='".$_GET['deleteid']."'";
	// echo $qry;
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "successs";
		header("location:viewState.php");
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

		$qry="UPDATE table_state SET isactive=0,dou='".$date."' where state_id='".$_GET['actionid']."'";
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewState.php");
			exit();
		}
	}
	if($isactive == 0)
	{
		$qry="UPDATE table_state SET isactive=1,dou='".$date."' where state_id='".$_GET['actionid']."'";
	// echo $qry;
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewState.php");
			exit();
		}
	}

}
?>