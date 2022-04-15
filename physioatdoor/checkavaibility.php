<?php
session_start();
require 'dbconnect.php';

$id=$_POST['id'];
// $date=str_replace("/","-",$_POST['d']);
// $newDate = date("m-d-Y",$date);
// echo $newDate;
$timestamp = strtotime($_POST['d']); 
$new_date = date('y-m-d', $timestamp);

$t=$_POST['t'];

$qry="SELECT * FROM table_appointment where physio_id='".$id."' and booking_date='".$new_date."' and timeslot='".$t."'";

$rs1=mysqli_query($conn,$qry);
// echo $qry;
if(mysqli_num_rows($rs1)>0)
{

	echo "Physio  is not available for this time";
	exit();


}
else
{
	echo "Pysio is available in this time";
}
?>