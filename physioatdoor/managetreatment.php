<?php
require 'dbconnect.php';

if(isset($_POST['add_treat']))
{

 	$target_dir = "assets/img/treatment/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

   
	$date=date('y-m-d');
	$qry="INSERT INTO table_treatment(treat_name,description,image,doi,isactive,dou) values('".$_POST['treat_name']."','".$_POST['description']."','".$target_file."','".$date."',1,'".$date."')";

	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "success";
		header("location:viewTreatment.php");
		exit();
	}
	else{
		echo "error";
	}
}
if(isset($_GET['deleteid']))
{
	$date=date('y-m-d');
	$qry="UPDATE table_treatment SET isactive=2 where treat_id='".$_GET['deleteid']."'";
	// echo $qry;
	$rs=mysqli_query($conn,$qry);
	if($rs)
	{
		// echo "successs";
		header("location:viewTreatment.php");
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


	$isactive=$_GET['isactive'];

	if($isactive == 1){

		$qry="UPDATE table_treatment SET isactive=0,dou='".$date."' where treat_id='".$_GET['actionid']."'";
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewTreatment.php");
			exit();
		}
	}
	if($isactive == 0)
	{
		$qry="UPDATE table_treatment SET isactive=1,dou='".$date."' where treat_id='".$_GET['actionid']."'";
	// echo $qry;
		$rs=mysqli_query($conn,$qry);
		if($rs)
		{
		// echo "successs";
			header("location:viewTreatment.php");
			exit();
		}
	}

}
?>