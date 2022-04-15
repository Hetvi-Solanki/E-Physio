<?php
session_start();
require 'dbconnect.php';

$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];
$contact=$_POST['cont_no'];
$date=date('y-m-d');

$qry="UPDATE table_admin SET firstname='".$firstname."',lastname='".$lastname."',email='".$email."',password='".$password."',cont_no='".$contact."',gender='".$gender."',dou='".$date."' where id='".$_SESSION['id']."'";

// $qry="UPDATE table_physio_reg SET physio_name='".$physio_name."',physio_dob='".$physio_dob."',email='".$email."',cont_no='".$cont_no."',address='".$address."',state_id='".$state."',city_id='".$city."',area_id='".$area."',total_exp='".$total_exp."',degree_id='".$degree."',spec_id='".$specialization."',dou='".$date."' where physio_id='".$_SESSION['physioid']."'";

// //echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs){
    //echo "success";
    header("location:dashboard.php");
}
else
{
    echo "error";
}
?>