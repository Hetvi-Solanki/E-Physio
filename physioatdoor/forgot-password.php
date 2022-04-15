<?php 
session_start();
if (!isset($_SESSION['id'])) {
  header("location:login.php");
}
require 'dbconnect.php';
$qrya="SELECT * FROM table_admin where id='".$_SESSION['id']."'";
//echo $qrya;
//exit();
$rsa=mysqli_query($conn,$qrya);
$rowa=mysqli_fetch_assoc($rsa);

?>

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dreamguys.co.in/preclinic/template/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:08:36 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
    <title>Physio At Door</title>
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="validation.css">
    <script src="validation.js" type="text/javascript" charset="utf-8" async defer></script>
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper account-wrapper">
        <div class="account-page">
         <div class="account-center">
            <div class="account-box">
                <form class="form-signin" action="forgot_pwdprocess.php" data-parsley-validate="" method="post">
                  <div class="account-logo">
                    <a href="index.php"><img src="logo1.png" alt=""></a>
                </div>
                <div class="form-group">
                    
                    <select id="forgotpass" class="form-control" required="">
                        <?php

                        $qry1="SELECT * FROM table_sec_q_details where isactive=1";
                        $rs1=mysqli_query($conn,$qry1);
                        while($row1=mysqli_fetch_assoc($rs1))
                        {
                           ?>
                           <option value="<?php echo $row1['Seq_id'];?>" <?php
                           if($row1['Seq_id'] == $rowa['Seq_id'])
                           {
                               echo 'selected';
                           }
                           ?>
                           ><?php echo $row1['que_name'];?></option>    
                           <?php
                       }
                       ?>  
                   </select> <br>
                   <input type="hidden" name="ans1" value="<?php echo $rowa['answer'] ?>">
                   <input type="text" name="ans" class="form-control" id="sec_q_ans"  placeholder="Answer" required="">
                   <div class="form-group text-center"><br><br>
                    <button class="btn btn-primary account-btn" type="submit" name="btn_submit">Reset Password</button>
                </div>
                <div class="text-center register-link">
                    <a href="login.php">Back to Login</a>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="popper.min.js"></script>
<script src="bootstrap.min.js"></script>
<script src="app.js"></script>
</body>


<!-- Mirrored from dreamguys.co.in/preclinic/template/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:08:36 GMT -->
</html>