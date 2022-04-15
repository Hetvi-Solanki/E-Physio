<?php
session_start();
if (!isset($_SESSION['uid'])) {
  header("location:login.php");
}
require 'dbconnect.php';
$qry1="SELECT * FROM table_patient_reg where u_id='".$_SESSION['uid']."'";
//echo $qrya;
//exit();
$rs1=mysqli_query($conn,$qry1);
$row1=mysqli_fetch_assoc($rs1);


?>
<!DOCTYPE html>
<html>


<!-- Mirrored from demo.themefisher.com/themefisher/medic/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 22:32:37 GMT -->
<head>
  <meta charset="utf-8">

  <link rel="shortcut icon" type="image/x-icon" href="favicon.jpg">
  <title>Physio At Door-Patient</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="slick.css">
  <link rel="stylesheet" href="slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="jquery.fancybox.min.css">
  <script src="validation.js" type="text/javascript" charset="utf-8" async defer></script>
  <link href="validation.css" rel="stylesheet">
  <!-- Stylesheets -->
  <link href="style.css" rel="stylesheet">
  <link href="manageProfile.css" rel="stylesheet">


  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
  <link rel="icon" href="favicon.html" type="image/x-icon">

  <!-- Latest compiled and minified CSS -->
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

  <!-- Popper JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Latest compiled JavaScript -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
            <a href="home.php">
              <img src="logo1.png" alt="" width="130">
            </a>
          </figure>
        </div>
        <div class="right-side">
          <ul class="contact-info">

<!--                         <li class="item">
                            <div class="icon-box">
                                  <i class="fa fa-phone"></i>
                            </div>
                            <strong>Call Now</strong>
                            <br>
                            <span>+ (88017) - 123 - 4567</span>
                          </li> -->
                          <li class="item">
                            <div class="icon-box">
                              <i class="fa fa-user"></i>
                            </div>
                            <strong><a href="editProfilepatient.php">
                              Manage Profile
                            </a></strong>
                            <br>
                            
                          </li>
                        </ul>

                       
                      </div>
                    </div>
                  </section>
                  <!--Header Upper-->





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
                      <li>
                        <a href="about.php">About</a>
                      </li>
                      <li>
                        <a href="treatment.php">Treatment</a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Posts
                          <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu "  style="background-color: #48bdc5;">
                          <li >
                            <a href="tips.php" style="color:black;">Tips</a>
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
                        <a href="feedback.php">Feedback</a>
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
              </div>
              <!-- /.navbar-collapse -->
            </div>
            <!-- /.container-fluid -->
          </nav>

          <section class="page-title text-center" style="background-image:url(3.jpg);">
            <div class="container">
              <div class="title-text">
                <h1>Manage Profile</h1>
                <ul class="title-menu clearfix">
                  <li>
                    <a href="index.php">home &nbsp;/</a>
                  </li>
                  <li>Manage Profile</li>
                </ul>
              </div>
            </div>
          </section>

          <div class="container emp-profile bg">
            <form method="post" action="editpatientprocess.php" enctype="multipart/form-data">
              
              <div class="row">
               
                <div class="col-md-6">
                  <div class="profile-head">
                    <h5>
                      <?php echo $row1['u_fname'];?>    <?php echo $row1['u_lname'];?>
                    </h5>


                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                      <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">About</a>
                      </li>

                    </ul>
                  </div>
                </div>

                <div class="col-md-4">
                  <div class="profile-img">
                    <br>
                    <br>
                    <br>
                    
                      <img src="<?php echo $row1['photo'];?>" height="10" width="10">
                    <!-- <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS52y5aInsxSm31CvHOFHWujqUx_wWTS9iM6s7BAm21oEN_RiGoog" alt=""/> -->
                    <div class="file btn btn-lg btn-primary">

                      Change Photo
                      <input type="file" name="image" value="" placeholder="">
                    </div>
                  </div>
                </div>

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
                           

                              <input type="hidden"  value="<?php echo $_GET['u_id'];?>">
                              <div class="row form-group">
                                <div class="col-md-6">
                                  <label>First Name</label>
                                </div>
                                <div class="col-md-6">
                                  <input type="text" name="u_fname" value="<?php echo $row1['u_fname'];?>" class="form-control" required="" placeholder="Your First name">

                                </div>
                              </div><br>
                              <div class="row form-group">
                                <div class="col-md-6">
                                  <label>Last Name</label>
                                </div>
                                <div class="col-md-6">
                                  <input type="text" name="u_lname" value="<?php echo $row1['u_lname'];?>" class="form-control" required="" placeholder="Your Last name">

                                </div>
                              </div><br>
                              <div class="row form-group">
                                <div class="col-md-6">
                                  <label>DOB</label>
                                </div>
                                <div class="col-md-6">
                                  <input type="date" name="dob" value="<?php echo $row1['dob'];?>" placeholder="DOB" class="form-control" required="">
                                </div>
                              </div><br>
                              <div class="row form-group">
                                <div class="col-md-6">
                                  <label>Email</label>
                                </div>
                                <div class="col-md-6">
                                  <input type="email" name="email" value="<?php echo $row1['email'];?>" placeholder="kshitighelani@gmail.com" class="form-control" required="">

                                </div>
                              </div><br>
                              <div class="row form-group">
                                <div class="col-md-6">
                                  <label>Age</label>
                                </div>
                                <div class="col-md-6">
                                 <input type="text" name="age" value="<?php echo $row1['age'];?>" class="form-control" required="" >
                               </div>
                             </div><br>
                             <div class="row form-group">
                              <div class="col-md-6">
                               <label>Phone</label>
                             </div>
                             <div class="col-md-6">
                              <input type="tel" name="cont_no" value="<?php echo $row1['cont_no'];?>" placeholder="1234567890" class="form-control" required="">
                            </div>
                          </div><br>
                          <div class="row form-group">
                            <div class="col-md-6">
                              <label>Gender</label>
                            </div>
                            <div class="col-md-6">
                              <input type="radio" name="gender" value="Male" <?php if ($row1['gender']=="Male") {
                                echo "checked";
                              } ?> placeholder="">Male
                              <input type="radio" name="gender" value="Female" <?php if ($row1['gender']=="Female") {
                                echo "checked";
                              } ?> placeholder="">Female
                            </div>
                          </div><br>
                          <div class="row form-group">
                            <div class="col-md-6">
                              <label>Address</label>
                            </div>
                            <div class="col-md-6">
                              <textarea name="address" class="form-control" required=""><?php echo $row1['address'];?></textarea>
                            </div>
                          </div><br>

                          <div class="row form-group">
                            <div class="col-md-6">
                              <label>State</label>
                            </div>
                            <div class="col-md-6">
                              <select name="state_id" class="form-control">
                                <?php

                                $qry1="SELECT * FROM table_state where isactive=1";
                                $rs1=mysqli_query($conn,$qry1);
                                while($row1=mysqli_fetch_assoc($rs1))
                                {
                                 ?>
                                 <option value="<?php echo $row1['state_id'];?>" <?php
                                  if($row1['state_id'] == $row1['state_id'])
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
                            <select name="city_id" class="form-control">
                              <?php

                                $qry1="SELECT * FROM table_cities where isactive=1";
                                $rs1=mysqli_query($conn,$qry1);
                                while($row1=mysqli_fetch_assoc($rs1))
                                {
                                 ?>
                                 <option value="<?php echo $row1['city_id'];?>" <?php
                                  if($row1['city_id'] == $row1['city_id'])
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
                          <select name="area_id" class="form-control">
                              <?php

                                $qry1="SELECT * FROM table_area where isactive=1";
                                $rs1=mysqli_query($conn,$qry1);
                                while($row1=mysqli_fetch_assoc($rs1))
                                {
                                 ?>
                                 <option value="<?php echo $row1['area_id'];?>" <?php
                                  if($row1['area_id'] == $row1['area_id'])
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

                    <div class="col-md-12 ">

                      <button type="submit" class="btn-style-one" style="width: 100%;" name="btn_submit">Save Profile</button>
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