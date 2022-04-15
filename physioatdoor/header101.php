<?php
require 'dbconnect.php';
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
                        <a href="index-2.html">
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
                              <strong><a href="editProfilephysio.php">
                                    Manage Profile
                              </a></strong>
                              <br>
                              
                        </li>
                       <!--  <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-camera"></i>
                              </div>
                              <strong><a href="addmedia.php">Upload Post</a></strong>
                              <br>
                              
                        </li> -->
                  </ul>
                  <div class="link-btn">
                        <a href="appointment.php" class="btn-style-one">Appointment <span class="badge notification"> 

                           <!-- <?php
                                       //$rs=mysqli_query($conn,"SELECT count(*) FROM table_appointment where isactive!=2");
                                       //$row=mysqli_fetch_array($rs);
                                       //$total=$row[0];
                                       //echo "<h3>".$total."</h3>";
                                    ?>  -->

                                    <?php
                                      $rs=mysqli_query($conn,"SELECT count(physio_id) FROM table_appointment WHERE physio_id=13");
                                      $row=mysqli_fetch_array($rs);
                                      $total=$row[0];
                                      echo $total;
                                    ?>

                        </span></a>

                       


                       <!--  <button class="btn btn-primary"><i class="fa fa-bell" aria-hidden="true"></i>
      <span class="badge badge-light"> 5</span>
    </button> -->
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
                              <a href="index1.php">Home</a>
                        </li>
                        <li>
                              <a href="about1.php">About</a>
                        </li>
                        <li>
                              <a href="treatment1.php">Treatments</a>
                        </li>
                        <!-- <li>
                              <a href="recruitment_post.php">Recruitments</a>
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

                        <li>
                              <a href="phy_index_after_logout.php">Logout</a>
                        </li>
                       
                  </ul>
            </div>
            <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
</nav>
<!--End Main Header -->