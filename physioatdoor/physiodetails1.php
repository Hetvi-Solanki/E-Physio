<?php 
require 'dbconnect.php';
$qry="SELECT * FROM table_physio_reg where physio_id='".$_GET['selectid']."'";
$rs2=mysqli_query($conn,$qry);



include("header101.php");
?>

<!DOCTYPE html>
<html>


<!-- Mirrored from demo.themefisher.com/themefisher/medic/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 22:32:37 GMT -->
<!-- <head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="favicon1.png">
  <title>Physio At Door-Patient</title> -->

  
  <!-- mobile responsive meta -->
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
   -->

  <!-- Slick Carousel -->
  <!-- <link rel="stylesheet" href="slick.css">
  <link rel="stylesheet" href="slick-theme.css"> -->
  <!-- FancyBox -->
  <!-- <link rel="stylesheet" href="jquery.fancybox.min.css">
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 -->

  <!-- Stylesheets -->
  <!-- <link href="style.css" rel="stylesheet">
  <link href="feed.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="validation.css">
  <script src="validation.js" type="text/javascript" charset="utf-8" async defer></script> -->
  
  <!--Favicon-->
  <!-- <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
  <link rel="icon" href="favicon.html" type="image/x-icon">
  
</head> -->


<body>
  <div class="page-wrapper">
    <!-- Preloader -->
    <!-- <div class="preloader"></div> -->
    <!-- Preloader -->



    <!--header top-->
    <!-- <div class="header-top">
      <div class="container clearfix">

      </div>
    </div> -->
    <!--header top-->

    <!--Header Upper-->
    <!-- <section class="header-uper">
      <div class="container clearfix">
        <div class="logo">
          <figure>
            <a href="home.php">
              <img src="logo1.png" alt="" width="130">
            </a>
          </figure>
        </div>
        <div class="right-side">
          <ul class="contact-info"> -->

<!--                         <li class="item">
                              <div class="icon-box">
                                    <i class="fa fa-phone"></i>
                              </div>
                              <strong>Call Now</strong>
                              <br>
                              <span>+ (88017) - 123 - 4567</span>
                            </li> -->
                            <!-- <li class="item">
                              <div>
                                <div class="icon-box">
                                  <i class="fa fa-user"></i>
                                </div>
                                <strong><a href="editProfilepatient.php">
                                  Manage Profile
                                </a></strong>
                                <br>
                              </div>
                              
                            </li>
                          </ul> -->

                          <!-- <div class="link-btn">
                            <a href="appointment.php" class="btn-style-one">Appointment</a>
                          </div> -->
                        <!-- </div>
                      </div>
                    </section> -->
                    <!--Header Upper-->





                    <!-- <nav class="navbar navbar-default">
                      <div class="container"> -->
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <!-- <div class="navbar-header">
                          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"
                          aria-expanded="false">
                          <span class="sr-only">Toggle navigation</span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                          <span class="icon-bar"></span>
                        </button>
                      </div> -->
                      <!-- Collect the nav links, forms, and other content for toggling -->
                      <!-- <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                          <li class="active">
                            <a href="index1.php">Home</a>
                          </li>
                          <li>
                            <a href="about1.php">About</a>
                          </li>
                          <li>
                            <a href="treatment1.php">Treatment</a>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post
                              <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu "  style="background-color: #48bdc5;">
                              <li >
                                <a href="tips1.php" style="color:black;">Tips</a>
                              </li>
                              <li>
                                <a href="photo_video.php" style="color:black;">Photos/Videos</a>
                              </li>
                            </ul>
                          </li>
                          <li>
                            <a href="physiolist.php">Physiotherapists</a>
                          </li>


                          <li>
                            <a href="contact.php">Contact</a>
                          </li>
                          <?php
                          if(isset($_SESSION['uid']))
                          {
                           ?> 
                           <li>
                            <a href="logout.php">Logout</a>
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
                  </div> -->
                  <!-- /.navbar-collapse -->
                <!-- </div> -->
                <!-- /.container-fluid -->
              <!-- </nav> -->

              <section class="page-title text-center" style="background-image:url(3.jpg);">
                <div class="container">
                  <div class="title-text">
                    <h1>Physio Details</h1>
                    <ul class="title-menu clearfix">
                      <li>
                        <a href="index1.php">home &nbsp;/</a>
                      </li>
                      <li>Physio Details</li>
                    </ul>
                  </div>
                </div>
              </section>



              <section class="team-section section">
                <div class="container">

                 <?php
                 if(mysqli_num_rows($rs2)>0)
                 {
                  while($row=mysqli_fetch_assoc($rs2))
                  {


                    ?>
                    <div class="section-title text-center">
                      <h1><?php echo $row['physio_name'];?></h1>
                      <br>



                    </div>
                    <div class="row">
                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"> 
                       <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style=" border-right: 2px solid #f4f4f4;">
                        <div class="team-member" style="margin-left: 10px;width: 404px;">
                         <img src="<?php echo $row['photo'];?>" alt="doctor" class="img-responsive profileimage">
                       </div>
                     </div>

                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6" style="">

                       <p style="margin-top:10px;"><strong>Address : </strong><?php echo $row['address']; ?></p><hr>
                       <p><strong>E-mail : </strong> <?php echo $row['email']  ?></p><hr>
                       <p><strong>Contact : </strong> <?php echo $row['cont_no'] ?></p><hr>
                       <p><strong>Experience : </strong> <?php echo $row['total_exp']; ?></p><hr>
                       <!-- <div class="link-btn">
                        <a href="bookappointment.php?id=<?php echo $_GET['selectid'];?>" class="btn-style-one btn margin_btn">Book an Appointment</a> -->

                        <!--  <a href="complaint.php" class="btn-style-one btn margin_btn1">Complaint</a> -->
                      <!-- </div> -->

                    </div>
                  </div>
                </div>




              </div>
              <?php
            }
          }
          ?>
        </div>
      </section>







  <br><br>


  <script type="text/javascript"> 
    jQuery(document).ready(function($) {


      $('#comp').css('color', '#48bdc5');
      $('feed').css('color', 'black');
      $('vfeed').css('color', 'black');

      $('#comp').click(function(event) {
        /* Act on the event */
        $(this).css('color', '#48bdc5');
        $('#feed').css('color', 'black');
        $('#vfeed').css('color', 'black');
      });

      $('#feed').click(function(event) {
        /* Act on the event */
        $(this).css('color', '#48bdc5');
        $('#comp').css('color', 'black');
        $('#vfeed').css('color', 'black');
      });

      $('#vfeed').click(function(event) {
        /* Act on the event */
        $(this).css('color', '#48bdc5');
        $('#comp').css('color', 'black');
        $('#feed').css('color', 'black');
      });
    });
  </script>

  <?php include 'footer.php';
  ?>