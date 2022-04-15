<?php
require 'dbconnect.php';
if (isset($_POST['btn_submit'])) 
{
    $target_dir = " ";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);

   
    $date=date('y-m-d');
    $user_type=1;
    $qry="INSERT INTO table_patient_reg(u_fname,u_lname,dob,age,gender,photo,email,cont_no,address,state_id,city_id,area_id,Seq_id,answer,password,user_type,doi,dou,isactive) values('".$_POST['u_fname']."','".$_POST['u_lname']."','".$_POST['dob']."','".$_POST['age']."','".$_POST['gender']."','".$target_file."','".$_POST['email']."','".$_POST['cont_no']."','".$_POST['address']."','".$_POST['state_id']."','".$_POST['city_id']."','".$_POST['area_id']."','".$_POST['Seq_id']."','".$_POST['answer']."','".$_POST['password']."','".$user_type."','".$date."','".$date."',1)";
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