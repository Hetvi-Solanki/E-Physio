<?php
require 'dbconnect.php';

if (isset($_POST['btn_submit'])) 
{

    $target_dir = " ";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


    $target_dir1 = " ";
    $target_file1 = $target_dir1 . basename($_FILES["image1"]["name"]);
    move_uploaded_file($_FILES["image1"]["tmp_name"], $target_file1);

    $date=date('y-m-d');
    $user_type=2;
    $qry="INSERT INTO table_physio_reg(physio_name,password,physio_dob,email,cont_no,address,state_id,city_id,area_id,doc_upload,total_exp,degree_id,spec_id,photo,Seq_id,answer,user_type,doi,dou,isactive) values('".$_POST['physio_name']."','".$_POST['password']."','".$_POST['physio_dob']."','".$_POST['email']."','".$_POST['cont_no']."','".$_POST['address']."','".$_POST['state_id']."','".$_POST['city_id']."','".$_POST['area_id']."','".$_FILES["image1"]["name"]."','".$_POST['total_exp']."','".$_POST['degree_id']."','".$_POST['spec_id']."','".$target_file."','".$_POST['Seq_id']."','".$_POST['answer']."','".$user_type."','".$date."','".$date."',1)";
    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
        echo "success";
        header("location:index1.php");
        exit();
    }
    else
    {
        echo "error";
    }
}

?>