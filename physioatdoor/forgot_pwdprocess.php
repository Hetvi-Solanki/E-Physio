<?php
require 'dbconnect.php';
if (isset($_POST['btn_submit'])) 
{
    $ans1=$_POST['ans1'];
    $ans=$_POST['ans'];
    if ($ans1==$ans) {
    	header("location:newpassword.php");	
    }
    else
    {
    	echo "Your ans is wrong";
    }


}
?>