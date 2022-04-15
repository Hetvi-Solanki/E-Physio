<?php


require 'dbconnect.php';
if (isset($_POST['btn_submit'])) 
{

   
    $date=date('y-m-d:h-i-s');
    $usertype=3;
    $qry="INSERT INTO table_admin(firstname,lastname,email,password,gender,cont_no,Seq_id,answer,user_type,doi,dou,isactive) values('".$_POST['firstname']."','".$_POST['lastname']."','".$_POST['email']."','".$_POST['password']."','".$_POST['gender']."','".$_POST['cont_no']."','".$_POST['Seq_id']."','".$_POST['answer']."','".$usertype."','".$date."','".$date."',1)";
    
    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
        echo "success";
        header("location:index.php");
        exit();
    }
    else
    {
        echo "error";
    }
}




?>