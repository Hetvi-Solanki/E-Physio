<?php 
 require 'dbconnect.php';
 $qry="SELECT * FROM table_tips_post where isactive!=2";


 $rs=mysqli_query($conn,$qry);
// while($row=mysqli_fetch_assoc($rs))
// {
//   $date =$row['doi'];
//   // echo $date;
//   echo date('D', strtotime($date));
// }
// exit();
 ?>
 <!DOCTYPE html>
 <html>


 <!-- Mirrored from demo.themefisher.com/themefisher/medic/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 30 Jan 2020 22:32:37 GMT -->
 <head>
  <meta charset="utf-8">
  <link rel="shortcut icon" type="image/x-icon" href="favicon1.png">
  <title>Physio At Door-Patient</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  

  <!-- Slick Carousel -->
  <link rel="stylesheet" href="slick.css">
  <link rel="stylesheet" href="slick-theme.css">
  <!-- FancyBox -->
  <link rel="stylesheet" href="jquery.fancybox.min.css">
  <link rel="stylesheet" href="assets/css/tips.css">
  <!-- Stylesheets -->
  <link href="style.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="validation.css">
  <script src="validation.js" type="text/javascript" charset="utf-8" async defer></script>
  
  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
  <link rel="icon" href="favicon.html" type="image/x-icon">
  

  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>



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
                          </ul>

                 <!--  <div class="link-btn">
                        <a href="appointment.php" class="btn-style-one">Appointment</a>
                      </div> -->
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
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Post
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
                <h1>Tips</h1>
                <ul class="title-menu clearfix">
                  <li>
                    <a href="index.php">home &nbsp;/</a>
                  </li>
                  <li>Tips</li>
                </ul>
              </div>
            </div>
          </section>


          <!--Start about us area-->
          <section class="service-tab-section section">
            <div class="outer-box clearfix">
              <div class="container">
                <div class="row">
                  <div class="col-md-12">
                    <!-- Nav tabs -->
                    <div class="tabs">
                      <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active">
                          <a id="sunday"  data-toggle="tab">Sunday</a>
                        </li>
                        <li role="presentation">
                          <a id="monday" data-toggle="tab">Monday</a>
                        </li>
                        <li role="presentation">
                          <a id="tuesday" data-toggle="tab">Tuesday</a>
                        </li>
                        <li role="presentation">
                          <a id="wednesday" data-toggle="tab">Wednesday</a>
                        </li>
                        <li role="presentation">
                          <a id="thursday" data-toggle="tab">Thursday</a>
                        </li>
                        <li role="presentation">
                          <a id="friday" data-toggle="tab">Friday</a>
                        </li>
                        <li role="presentation">
                          <a id="saturday" data-toggle="tab">Saturday</a>
                        </li>
                      </ul>
                    </div>
                    <!--Start single tab content-->

                    <div class="table-container">
                      <table class="table table-filter">
                        <tbody>
                         <?php
                         if(mysqli_num_rows($rs)>0)
                         {
                          while($row=mysqli_fetch_assoc($rs))
                          {

                            $qrys="SELECT * FROM table_treatment where treat_id = '".$row['treat_id']."'";
                            $rss=mysqli_query($conn,$qrys);
                            $rows=mysqli_fetch_assoc($rss);

                            $date =$row['doi'];

                            $d1=date('D', strtotime($date));
                            if($d1 == 'Sun')
                            {
                             ?>
                             <tr  class="sundayrow">
                              <td>
                                <a href="javascript:;" class="star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                              </td>
                              <td>
                                <div class="media">
                                  <a href="#" class="pull-left"></a>
                                  <div class="media-body">
                                    <span class="media-meta pull-right"> <?php echo $row['doi']?></span>
                                    <!-- <span class="media-meta pull-right">8-3-2020</span> -->
                                    <h4 class="title">
                                    <?php echo $row['title']?> 
                          
                                    <span class="pull-right onaylanan"> <?php echo $rows['treat_name']?></span>
                                    <!--  <span class="pull-right onaylanan"> joint </span> -->
                                   </h4>
                                    <p class="summary"> <?php echo $row['description']?> </p> 
                                <!--    <p class="summary"> dfahssgsrgfd</p> -->
                                 </div>
                               </div>
                             </td>
                           </tr>
                           <?php
                         }
                         if($d1 == 'Mon')
                         {
                          ?>
                          <tr  class="mondayrow">
                              <td>
                                <a href="javascript:;" class="star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                              </td>
                              <td>
                                <div class="media">
                                  <a href="#" class="pull-left"></a>
                                  <div class="media-body">
                                    <span class="media-meta pull-right"> <?php echo $row['doi']?></span>
                                    <!-- <span class="media-meta pull-right">8-3-2020</span> -->
                                    <h4 class="title">
                                    <?php echo $row['title']?> 
                          
                                    <span class="pull-right onaylanan"> <?php echo $rows['treat_name']?></span>
                                    <!--  <span class="pull-right onaylanan"> joint </span> -->
                                   </h4>
                                    <p class="summary"> <?php echo $row['description']?> </p> 
                                <!--    <p class="summary"> dfahssgsrgfd</p> -->
                                 </div>
                               </div>
                             </td>
                           </tr>
                         <?php
                       }
                       if($d1 == 'Tue')
                       {
                        ?>
                        <tr class="tuesdayrow">
                              <td>
                                <a href="javascript:;" class="star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                              </td>
                              <td>
                                <div class="media">
                                  <a href="#" class="pull-left"></a>
                                  <div class="media-body">
                                    <span class="media-meta pull-right"> <?php echo $row['doi']?></span>
                                    <!-- <span class="media-meta pull-right">8-3-2020</span> -->
                                    <h4 class="title">
                                    <?php echo $row['title']?> 
                          
                                    <span class="pull-right onaylanan"> <?php echo $rows['treat_name']?></span>
                                    <!--  <span class="pull-right onaylanan"> joint </span> -->
                                   </h4>
                                    <p class="summary"> <?php echo $row['description']?> </p> 
                                <!--    <p class="summary"> dfahssgsrgfd</p> -->
                                 </div>
                               </div>
                             </td>
                           </tr>
                       <?php
                     }
                     if($d1== 'Wed')
                     {
                      ?>
                      <tr class="wednesdayrow">
                              <td>
                                <a href="javascript:;" class="star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                              </td>
                              <td>
                                <div class="media">
                                  <a href="#" class="pull-left"></a>
                                  <div class="media-body">
                                    <span class="media-meta pull-right"> <?php echo $row['doi']?></span>
                                    <!-- <span class="media-meta pull-right">8-3-2020</span> -->
                                    <h4 class="title">
                                    <?php echo $row['title']?> 
                          
                                    <span class="pull-right onaylanan"> <?php echo $rows['treat_name']?></span>
                                    <!--  <span class="pull-right onaylanan"> joint </span> -->
                                   </h4>
                                    <p class="summary"> <?php echo $row['description']?> </p> 
                                <!--    <p class="summary"> dfahssgsrgfd</p> -->
                                 </div>
                               </div>
                             </td>
                           </tr>
                     <?php 
                     }
                     if($d1 == 'Thu')
                     {
                      ?>
                      <tr class="thursdayrow">
                              <td>
                                <a href="javascript:;" class="star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                              </td>
                              <td>
                                <div class="media">
                                  <a href="#" class="pull-left"></a>
                                  <div class="media-body">
                                    <span class="media-meta pull-right"> <?php echo $row['doi']?></span>
                                    <!-- <span class="media-meta pull-right">8-3-2020</span> -->
                                    <h4 class="title">
                                    <?php echo $row['title']?> 
                          
                                    <span class="pull-right onaylanan"> <?php echo $rows['treat_name']?></span>
                                    <!--  <span class="pull-right onaylanan"> joint </span> -->
                                   </h4>
                                    <p class="summary"> <?php echo $row['description']?> </p> 
                                <!--    <p class="summary"> dfahssgsrgfd</p> -->
                                 </div>
                               </div>
                             </td>
                           </tr>
                     <?php 
                     }
                     if($d1 == 'Fri'){
                      ?>
                     <tr class="fridayrow">
                              <td>
                                <a href="javascript:;" class="star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                              </td>
                              <td>
                                <div class="media">
                                  <a href="#" class="pull-left"></a>
                                  <div class="media-body">
                                    <span class="media-meta pull-right"> <?php echo $row['doi']?></span>
                                    <!-- <span class="media-meta pull-right">8-3-2020</span> -->
                                    <h4 class="title">
                                    <?php echo $row['title']?> 
                          
                                    <span class="pull-right onaylanan"> <?php echo $rows['treat_name']?></span>
                                    <!--  <span class="pull-right onaylanan"> joint </span> -->
                                   </h4>
                                    <p class="summary"> <?php echo $row['description']?> </p> 
                                <!--    <p class="summary"> dfahssgsrgfd</p> -->
                                 </div>
                               </div>
                             </td>
                           </tr>
                     <?php 
                     }
                     if($d1 == 'Sat')
                     {
                      ?>
                     <tr class="saturdayrow">
                              <td>
                                <a href="javascript:;" class="star">
                                  <i class="fa fa-star" aria-hidden="true"></i>
                                </a>
                              </td>
                              <td>
                                <div class="media">
                                  <a href="#" class="pull-left"></a>
                                  <div class="media-body">
                                    <span class="media-meta pull-right"> <?php echo $row['doi']?></span>
                                    <!-- <span class="media-meta pull-right">8-3-2020</span> -->
                                    <h4 class="title">
                                    <?php echo $row['title']?> 
                          
                                    <span class="pull-right onaylanan"> <?php echo $rows['treat_name']?></span>
                                    <!--  <span class="pull-right onaylanan"> joint </span> -->
                                   </h4>
                                    <p class="summary"> <?php echo $row['description']?> </p> 
                                <!--    <p class="summary"> dfahssgsrgfd</p> -->
                                 </div>
                               </div>
                             </td>
                           </tr>
                      <?php
                     }
                   }
                 }
                 ?> 
               </tbody>
             </table>
           </div> 
         </div>
         <!--End single tab content-->

       </div>
     </div>
   </div>
 </div>
</div>
</section>
<!--End about us area-->
<script type="text/javascript">
  $(document).ready(function () {
      $('.sundayrow').show();
      $('.mondayrow').hide();
      $('.tuesdayrow').hide();
      $('.wednesdayrow').hide();
      $('.thursdayrow').hide();
      $('.fridayrow').hide();
      $('.saturdayrow').hide();
    $('#sunday').click(function(event) {
      /* Act on the event */
      $('.sundayrow').show();
      $('.mondayrow').hide();
      $('.tuesdayrow').hide();
      $('.wednesdayrow').hide();
      $('.thursdayrow').hide();
      $('.fridayrow').hide();
      $('.saturdayrow').hide();
    });


    $('#monday').click(function(event) {
      /* Act on the event */
       $('.mondayrow').show();
      $('.sundayrow').hide();
      $('.tuesdayrow').hide();
      $('.wednesdayrow').hide();
      $('.thursdayrow').hide();
      $('.fridayrow').hide();
      $('.saturdayrow').hide();
    });

    $('#tuesday').click(function(event) {
      /* Act on the event */
      $('.tuesdayrow').show();
      $('.mondayrow').hide();
      $('.sundaydayrow').hide();
      $('.wednesdayrow').hide();
      $('.thursdayrow').hide();
      $('.fridayrow').hide();
      $('.saturdayrow').hide();
    });
    $('#wednesday').click(function(event) {
      /* Act on the event */
      $('.wednesdayrow').show();
      $('.mondayrow').hide();
      $('.sundaydayrow').hide();
      $('.tuesdayrow').hide();
      $('.thursdayrow').hide();
      $('.fridayrow').hide();
      $('.saturdayrow').hide();
    });
    $('#thursday').click(function(event) {
      /* Act on the event */
      $('.thursdayrow').show();
      $('.mondayrow').hide();
      $('.sundaydayrow').hide();
      $('.wednesdayrow').hide();
      $('.tuesdayrow').hide();
      $('.fridayrow').hide();
      $('.saturdayrow').hide();
    });
    $('#friday').click(function(event) {
      /* Act on the event */
      $('.fridayrow').show();
      $('.mondayrow').hide();
      $('.sundaydayrow').hide();
      $('.wednesdayrow').hide();
      $('.thursdayrow').hide();
      $('.tuesdayrow').hide();
      $('.saturdayrow').hide();
    });

    $('#saturday').click(function(event) {
      /* Act on the event */
      $('.saturdayrow').show();
      $('.mondayrow').hide();
      $('.sundaydayrow').hide();
      $('.wednesdayrow').hide();
      $('.thursdayrow').hide();
      $('.tuesdayrow').hide();
      $('.fridayrow').hide();
    });
    

    $('.star').on('click', function () {
      $(this).toggleClass('star-checked');
    });

    $('.ckbox label').on('click', function () {
      $(this).parents('tr').toggleClass('selected');
    });

    $('.btn-filter').on('click', function () {
      var $target = $(this).data('target');
      if ($target != 'all') {
        $('.table tr').css('display', 'none');
        $('.table tr[data-status="' + $target + '"]').fadeIn('slow');
      } else {
        $('.table tr').css('display', 'none').fadeIn('slow');
      }
    });

  });
</script>

<?php include 'footer.php'; ?>
