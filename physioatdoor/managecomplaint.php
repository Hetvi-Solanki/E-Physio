<?php
session_start();
if(!isset($_SESSION['uid']))
{
    header("location:login.php");
    exit();
}
require 'dbconnect.php';
if (isset($_POST['add_complaint'])) 
{

    $date=date('y-m-d');

    $qry="INSERT INTO table_complaint(physio_id,u_id,message,doi,dou,isactive) values('".$_POST['phy_id']."','".$_SESSION['uid']."','".$_POST['message']."','".$date."','".$date."',1)";
    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
       // echo "success";
        header("location:index.php");
        exit();
    }
    else
    {
        echo "error";
    }
}

?>