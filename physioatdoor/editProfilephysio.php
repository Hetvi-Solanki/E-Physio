<?php
session_start();
if (!isset($_SESSION['physioid'])) {
  header("location:login.php");
}
require 'dbconnect.php';
$qry="SELECT * FROM table_physio_reg where physio_id='".$_SESSION['physioid']."'";
$rs=mysqli_query($conn,$qry);
$row=mysqli_fetch_assoc($rs);



?>

<!DOCTYPE html>
<html>


<!-- Mirrored from demo.themefisher.com/themefisher/medic/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 22:32:37 GMT -->
<head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="logo.png">
  <title>Physio At Door - Physiotherapist</title>

  
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
  <link href="manageprofile.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="validation.css">
    <script src="validation.js" type="text/javascript" charset="utf-8" async defer></script>
  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
  <link rel="icon" href="favicon.html" type="image/x-icon">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link href="logo.css" rel="stylesheet">
</head>


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->

  

<!--header top-->
<div class="header-top">
      <div class="container clearfix">
            
      </div>
</div>
<!--header top-->

<!--Header Upper-->
<section class="header-uper">
      <div class="container clearfix">
            <div class="logo">
                  <figure>
                        <a href="index.php">
                              <img src="logo1.png" alt="" width="130">
                        </a>
                  </figure>
            </div>
            <div class="right-side">
                  <ul class="contact-info">
                        <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-user"></i>
                              </div>
                              <strong><a href="manageProfile.php">
                                    Manage Profile
                              </a></strong>
                              <br>
                              
                        </li>
                      
                  </ul>
                  <div class="link-btn">
                        <a href="appointment.php" class="btn-style-one">Appointment <span class="badge notification"> 5</span></a>
                       
                  </div>
            </div>
      </div>
</section>
<!--Header Upper-->


<!--Main Header-->
<nav class="navbar navbar-default">
      <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                        aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                  </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                  <ul class="nav navbar-nav">
                        <li class="active">
                              <a href="index.php">Home</a>
                        </li>
                        <!-- <li>
                              <a href="about.php">About</a>
                        </li>
                        <li>
                              <a href="treatment.php">Treatments</a>
                        </li> -->
                        <!-- <li>
                              <a href="recruitment_post.php">Recruitments</a>
                        </li> -->
                       <!-- <li>
                              <a href="tipsform.php">Upload Tips</a>
                        </li> -->
                        <!-- <li>
                              <a href="contact.html">Contact</a>
                        </li> -->
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Tips
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu "  style="background-color: #48bdc5;">
                                    <li >
                                          <a href="addtips.php" style="color:black;">Upload Tips</a>
                                    </li>
                                    <li>
                                          <a href="viewtips1.php" style="color:black;">View Tips</a>
                                    </li>
                              </ul>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Posts
                                    <span class="caret"></span>
                              </a>
                              <ul class="dropdown-menu "  style="background-color: #48bdc5;">
                                    <li >
                                          <a href="addmedia.php" style="color:black;">Upload Posts</a>
                                    </li>
                                    <li>
                                          <a href="viewmedia1.php" style="color:black;">View Posts</a>
                                    </li>
                              </ul>
                        </li>

                          <?php
                      if(isset($_SESSION['physioid']))
                      {
                       ?> 
                       <li>
                        <a href="logout1.php">Logout</a>
                      </li>
                      <?php
                    }
                    else
                    {
                     ?> 
                     <li>
                      <a href="login.php">Login</a>
                    </li>
                    <?php
                  }
                  ?>
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->
<section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Manage Profile</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index1.php">home &nbsp;/</a>
                </li>
                <li>Manage Profile</li>
            </ul>
        </div>
    </div>
</section>


<div class="container emp-profile bg">
            <form method="post" action="manageupdatephysio.php" enctype="multipart/form-data">
                <div class="row">
                    <!-- <div class="col-md-4">
                        <div class="profile-img">
                          <img src="<?php echo $row['photo'];?>" height="100" width="100">
                             <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/> -->
                            <!-- <div class="file btn btn-lg btn-primary">
                                Change Photo
                                <input type="file" name="image"/>
                            </div>
                        </div>
                    </div> --> 
                    <div class="col-md-6">
                        <div class="profile-head">
                                    <h5>
                                         <?php echo $row['physio_name'];?>
                                    </h5>
                                    
                                  <!--   <p class="proile-rating">RANKINGS : <span>8/10</span></p> -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="col-md-2">
                        <input type="submit" class="profile-edit-btn" name="btnAddMore" value="Edit Profile"/>
                    </div> -->
                </div>
          
                <div class="row">
                    <div class="col-md-4">
                        <!-- <div class="profile-work">
                            <p>WORK LINK</p>
                            <a href="">Website Link</a><br/>
                            <a href="">Bootsnipp Profile</a><br/>
                            <a href="">Bootply Profile</a>
                            <p>SKILLS</p>
                            <a href="">Web Designer</a><br/>
                            <a href="">Web Developer</a><br/>
                            <a href="">WordPress</a><br/>
                            <a href="">WooCommerce</a><br/>
                            <a href="">PHP, .Net</a><br/>
                        </div> -->
                    </div>
                    <div class="col-md-8">
                        <div class="tab-content profile-tab active" id="myTabContent">
                            <div class="tab-pane  active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                     
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Physiotherapist Name</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="text" name="physio_name" value="<?php echo $row['physio_name'];?>" class="form-control" required="">
                                                
                                            </div>
                                        </div><br>
                                        
                                         <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>DOB</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="date" name="physio_dob" value="<?php echo $row['physio_dob'];?>" placeholder="DOB" class="form-control" required="">
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="email" name="email" value="<?php echo $row['email'];?>" placeholder="kshitighelani@gmail.com" class="form-control" required="">
                                           
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Contact no</label>
                                            </div>
                                            <div class="col-md-6">
                                               <input type="text" name="cont_no" value="<?php echo $row['cont_no'];?>" class="form-control" required="" >
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Total experience</label>
                                            </div>
                                            <div class="col-md-6">
                                                <input type="tel" name="total_exp" value="<?php echo $row['total_exp'];?>" placeholder="2" class="form-control" required="">
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Address</label>
                                            </div>
                                            <div class="col-md-6">
                                                <textarea name="address" placeholder="address" class="form-control" required=""><?php echo $row['address'];?></textarea>
                                            </div>
                                        </div><br>
                                         <div class="row form-group">
                                        
                        
                       
                           
                        
                                            <div class="col-md-6">
                                                <label>Document Upload</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="profile-img">
                          <img src="<?php echo $row['doc_upload'];?>" height="100" width="100">
                            <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/> -->
                            <div class="file btn btn-lg btn-primary">
                                Change Document
                                <input type="file" name="image1"/>
                            </div>
                        </div>
                                              <!--  <input type="file" name="upload_document" value="" placeholder=""> -->
                                            </div>
                                        </div><br>

                                       
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>State</label>
                                            </div>
                                            <div class="col-md-6">
                                                 <select name="state_id" style="width: 343px; height: 34px;"  required="">
                                                      <?php

                                $qry1="SELECT * FROM table_state where isactive=1";
                                $rs1=mysqli_query($conn,$qry1);
                                while($row1=mysqli_fetch_assoc($rs1))
                                {
                                 ?>
                                 <option value="<?php echo $row1['state_id'];?>" <?php
                                  if($row1['state_id'] == $row['state_id'])
                                    {
                                     echo 'selected';
                                   }
                                   ?>
                                   ><?php echo $row1['state_name'];?></option>    
                                 <?php
                               }
                               ?>  
                                                </select>
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>City</label>
                                            </div>
                                            <div class="col-md-6">
                                               <select name="city_id" style="width: 343px; height: 34px;" required="">
                                                    <?php

                                $qry1="SELECT * FROM table_cities where isactive=1";
                                $rs1=mysqli_query($conn,$qry1);
                                while($row1=mysqli_fetch_assoc($rs1))
                                {
                                 ?>
                                 <option value="<?php echo $row1['city_id'];?>" <?php
                                  if($row1['city_id'] == $row['city_id'])
                                    {
                                     echo 'selected';
                                   }
                                   ?>
                                   ><?php echo $row1['city_name'];?></option>    
                                 <?php
                               }
                               ?>  
                                                </select>
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Area</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="area_id" style="width: 343px; height: 34px;" required="">
                                                   <?php

                                $qry1="SELECT * FROM table_area where isactive=1";
                                $rs1=mysqli_query($conn,$qry1);
                                while($row1=mysqli_fetch_assoc($rs1))
                                {
                                 ?>
                                 <option value="<?php echo $row1['area_id'];?>" <?php
                                  if($row1['area_id'] == $row['area_id'])
                                    {
                                     echo 'selected';
                                   }
                                   ?>
                                   ><?php echo $row1['area_name'];?></option>    
                                 <?php
                               }
                               ?>  
                                                </select>
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Degree</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="degree_id" style="width: 343px; height: 34px;" required="">
                                                    <?php

                                $qry1="SELECT * FROM table_degree where isactive=1";
                                $rs1=mysqli_query($conn,$qry1);
                                while($row1=mysqli_fetch_assoc($rs1))
                                {
                                 ?>
                                 <option value="<?php echo $row1['degree_id'];?>" <?php
                                  if($row1['degree_id'] == $row['degree_id'])
                                    {
                                     echo 'selected';
                                   }
                                   ?>
                                   ><?php echo $row1['degree_name'];?></option>    
                                 <?php
                               }
                               ?>  
                                                </select>
                                            </div>
                                        </div><br>
                                        <div class="row form-group">
                                            <div class="col-md-6">
                                                <label>Specialization</label>
                                            </div>
                                            <div class="col-md-6">
                                                <select name="spec_id" style="width: 343px; height: 34px;" required="">
                                                     <?php

                                $qry1="SELECT * FROM table_specialization where isactive=1";
                                $rs1=mysqli_query($conn,$qry1);
                                while($row1=mysqli_fetch_assoc($rs1))
                                {
                                 ?>
                                 <option value="<?php echo $row1['spec_id'];?>" <?php
                                  if($row1['spec_id'] == $row['spec_id'])
                                    {
                                     echo 'selected';
                                   }
                                   ?>
                                   ><?php echo $row1['spec_name'];?></option>    
                                 <?php
                               }
                               ?>  
                                                </select>
                                            </div>
                                        </div><br>
                                      
                                         
                                        <div class="row form-group">
                                         
                                          <div class="col-md-12 ">
                                            
                                              <button type="submit" class="btn-style-one" style="width: 100%;">Save Profile</button>
                                         </div><br><br>
                                          
                                        
                                        </div>
                                      </form>
                                        </div>
                           
                            </div>
                        </div>
                    </div>
                </div>
                    
        </div>






 

<?php include 'footer.php';
?>