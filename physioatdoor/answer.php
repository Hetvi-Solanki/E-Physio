<?php
require 'dbconnect.php';
if(isset($_POST['email_btn']))
{
  if($_POST['type'] == 1)
  {
    $qry="SELECT * FROM table_patient_reg where email='".$_POST['email']."'";
    $rs1=mysqli_query($conn,$qry);
    if(mysqli_num_rows($rs1)>0)
    {

    }
    else
    {
      echo "<script>alert('please enter valid email address');</script>";
      echo "<script>window.location='email.php';</script>";
      exit();
    }
  }
  if($_POST['type'] == 2)
  {
    $qry="SELECT * FROM table_physio_reg where email='".$_POST['email']."'";
    $rs2=mysqli_query($conn,$qry);
    if(mysqli_num_rows($rs2)>0)
    {

    }
    else
    {
      echo "<script>alert('please enter valid email address');</script>";
      echo "<script>window.location='email.php';</script>";
      exit();
    }
  }
  if($_POST['type'] == 3)
  {
    $qry="SELECT * FROM table_admin where email='".$_POST['email']."'";
    $rs2=mysqli_query($conn,$qry);
    if(mysqli_num_rows($rs2)>0)
    {

    }
    else
    {
      echo "<script>alert('please enter valid email address');</script>";
      echo "<script>window.location='email.php';</script>";
      exit();
    }
  }
}
else
{
  header("location:email.php");
  exit();
}
?>
<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
 <link rel="shortcut icon" type="image/x-icon" href="favicon.jpg">
    <title>Physio At Door-Login</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="slick.css">
  <link rel="stylesheet" href="slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="style.css" rel="stylesheet">
   <link href="login.css" rel="stylesheet">
      <link href="validation.css" rel="stylesheet">
  <script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>
<script src="bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="slick.min.js"></script>
<!-- FancyBox -->
<script src="jquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="gmap.js"></script>

<script src="validate.js"></script>
<script src="validation.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="wow.js"></script>
<script src="jquery-ui.js"></script>
<script src="timePicker.js"></script>
<script src="script.js"></script>
  
  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
  <link rel="icon" href="favicon.html" type="image/x-icon">

  <style type="text/css" media="screen">
      .img
      {
        background-image: url('physio-logo.jpg');
        width: auto;
        height: 380px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
       /*  box-shadow: 2px 2px 2px #038197; */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16),0 2px 10px rgba(0, 0, 0, 0.12);
        margin-top: 80px;
        /* border: 1px solid black; */
      }
      .change_link
      {
        color: white;
      }
      .to_register
      {
        color: white;
        font-weight: bold;
        text-decoration: underline;
      }
      
  /*   .vl 
    {
      border-right: 1px solid  #48bdc5;
      height: 500px;
      position: absolute;
      left: 100%;
   
      top: 0;
    } */
      
  </style>
</head>
<body>
<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1 col-md-offset-3">
                  <form action="resetpass.php" data-parsley-validate="" method="post">
                    <h3>Enter Question and Answer</h3>
                    <div class="form-group">
                      <!-- <input type="email" class="form-control" name="email" placeholder="Your Email *" value=""  required="" /> -->
                      <select class="form-control" name="que">
                        <?php
                        require 'dbconnect.php';
                        $qry="SELECT * FROM table_sec_q_details where isactive=1";
                        $rs=mysqli_query($conn,$qry);
                        while($row=mysqli_fetch_assoc($rs))
                        {
                        ?>
                        <option value="<?php echo $row['Seq_id'];?>"><?php echo $row['que_name'];?></option>
                        <?php
                      }
                        ?>
                      </select>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control" name="an" placeholder="Your answer"  required="" />
                     
                    </div>
                     <input type="hidden" name="email" value="<?php echo $_POST['email'];?>">
                      <input type="hidden" name="type" value="<?php echo $_POST['type'];?>">
                  <center>
                    <div class="form-group">
                        <input type="submit" class="btnSubmit" value="Check" name="answer" />
                    </div></center>
                    
                  </form>
                     
                </div>
                
        </div> 
</body>
</html>