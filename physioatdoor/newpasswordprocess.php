<?php
session_start();
require 'dbconnect.php';


$password=$_POST['password'];
$qry="UPDATE table_admin SET password='".$password."' where id='".$_SESSION['id']."'";
$rs=mysqli_query($conn,$qry);
if($rs){
	//echo "success";
	header("location:index.php");
}
else
{
	echo "error";
}
?>