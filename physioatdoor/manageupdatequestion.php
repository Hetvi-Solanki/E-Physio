<?php
require 'dbconnect.php';

$ques=$_POST['que_name'];

$date=date('y-m-d');
$id=$_POST['id'];
$qry="UPDATE table_sec_q_details SET que_name='".$ques."',dou='".$date."' where Seq_id='".$id."'";
//echo $qry;
$rs=mysqli_query($conn,$qry);
if($rs){
	//echo "success";
	header("location:viewQuestions.php");
}
else
{
	echo "error";
}
?>