<?php
// var_dump($_POST);
require 'dbconnect.php';
// exit();
// var_dump($_GET);
// echo $_GET['state_name'];
if(isset($_POST['add_recruit']))
{
	
	require 'fileupload.php';
	$image=$_FILES['image']['name'];
	$date=date('y-m-d');
	$qry="INSERT INTO table_recruitment(title,image,description,doi,isactive,dou) values('".$_POST['title']."','".$image."','".$_POST['description']."','".$date."',1,'".$date."')";
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "success";
		header("location:viewRecruitment.php");
		exit();
	}
	else{
		echo "error";
	}
}
if(isset($_GET['deleteid']))
{
	$date=date('y-m-d');
	$qry="UPDATE table_recruitment SET isactive=2 where recruit_id='".$_GET['deleteid']."'";
	// echo $qry;
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "successs";
		header("location:viewRecruitment.php");
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

		$qry="UPDATE table_recruitment SET isactive=0,dou='".$date."' where recruit_id='".$_GET['actionid']."'";
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewRecruitment.php");
			exit();
		}
	}
	if($isactive == 0)
	{
		$qry="UPDATE table_recruitment SET isactive=1,dou='".$date."' where recruit_id='".$_GET['actionid']."'";
	// echo $qry;
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewRecruitment.php");
			exit();
		}
	}

}
?>