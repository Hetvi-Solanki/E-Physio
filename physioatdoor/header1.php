<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from dreamguys.co.in/preclinic/template/index.html by HTTrack Website Copier/3.x [XR&CO'2017], Tue, 15 Oct 2019 12:02:14 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="favicon1.png">
    <title>Physio At Door-Admin</title>
    <link href="../../../external.html?link=https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" type="text/css" href="validation.css">
    <link rel="stylesheet" type="text/css" href="https://parsleyjs.org/src/parsley.css">
    <script src="https://parsleyjs.org/dist/parsley.min.js" type="text/javascript" ></script>
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
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="#" class="logo">
					<img src="logo1.png" width="200" height="50" alt=""> 
				</a>
			</div>
			<a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
            <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
            <ul class="nav user-menu float-right">
                
                <li class="nav-item dropdown has-arrow">
                    <a href="#" class="user-link" data-toggle="dropdown">
                        <span class="user-img">					
						</span>
						<a class="text-dark" href="login.php">Logout</a>
                    </a>
		        </li>
            </ul>
           <!--  <div class="dropdown mobile-user-menu float-right">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="profile.html">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                    <a class="dropdown-item" href="settings.html">Settings</a>
                    <a class="dropdown-item" href="index.php">Logout</a>
                </div>
            </div> -->
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li class="menu-title">Main</li>
                        <li class="active">
                            <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
                        </li>
						<li>
                            <a href="editadmin.php"><i class="fa fa-user-circle"></i> <span>Manage Profile </span><!-- <span class="menu-arrow"></span> --></a>
                            <!-- <ul style="display: none;">
                               
                                <li><a href="invoice-reports.html">View User </a></li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="viewPatient.php"><i class="fa fa-user"></i><span>View Patient </span><!-- <span class="menu-arrow"> --></span></a>
                            <!-- <ul style="display: none;">
                              
                                <li><a href="invoice-reports.html">View Patient </a></li>
                            </ul> -->
                        </li>
                        <li>
                            <a href="viewPhysio.php"><i class="fa fa-user-md"></i> <span>View Physiotherapist </span><!-- <span class="menu-arrow"> --></span></a>
                            <!-- <ul style="display: none;">
                                
                                <li><a href="invoice-reports.html">View Physio </a></li>
                                 
                            </ul> -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i> <span>Manage State </span><span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="addState.php">Add State</a></li>
                                <li><a href="viewState.php">View State</a></li>
                               
                              
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i><span>Manage City </span><span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="addCity.php">Add City</a></li>
                                <li><a href="viewCity.php">View City</a></li>
                                

                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-area-chart"></i> <span>Manage Area </span><span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="addArea.php">Add Area</a></li>
                                <li><a href="viewArea.php">View Area</a></li>
                                
                            </ul>
                        </li>
                        <li>
                            <a href="viewContact.php"><i class="fa fa-phone"></i> <span>View Contact </span><!-- <span class="menu-arrow"></span> --></a>
                           <!--  <ul style="display: none;">
                              
                                <li><a href="viewContact.php">View Contact</a></li>
                                
                               
                            </ul> -->
                        </li>
                         <li>
                            <a href="viewFeedback.php"><i class="fa fa-comment-o"></i> <span>View Feedback </span><!-- <span class="menu-arrow"></span> --></a>
                           <!--  <ul style="display: none;">
                                
                                <li><a href="viewFeedback.php">View Feedback</a></li>
                                 
                            </ul> -->
                        </li>
                         <li>
                            <a href="viewComplaint.php"><i class="fa fa-comments-o"></i><span>View Complaint </span><!-- <span class="menu-arrow"> --></span></a>
                           <!--  <ul style="display: none;">
                               
                                <li><a href="viewComplaint.php">View Complaint</a></li>
                          
                            </ul> -->
                        </li>
                         <li>
                            <a href="viewBooking.php"><i class="fa fa-book"></i> <span>View Booking Records</span> <!-- <span class="menu-arrow"></span> --></a>
                            <!-- <ul style="display: none;">
                               
                                <li><a href="invoice-reports1.html"> View Booking </a></li>
                                
                            </ul> -->
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-question-circle-o"></i> <span>Manage Security Questions</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="addQuestion.php"> Add Question </a></li>
                             
                               
                                <li><a href="viewQuestions.php"> View Question </a></li>
                            </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-graduation-cap"></i> <span>Manage Degree</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="addDegree.php"> Add Degree </a></li>
                               
                                <li><a href="viewDegree.php"> View Degree </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-shield"></i><span>Manage Specialization</span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                <li><a href="addSpecialization.php"> Add Specialization </a></li>
                          
                                <li><a href="viewSpecialization.php"> View Specialization </a></li>
                            </ul>
                        </li>
                       
                        <li>
                            <a href="#"><i class="fa fa-wheelchair"></i> <span>Manage treatment </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                 <li><a href="addTreatment.php"> Add treatment  </a></li>
                           
                                <li><a href="viewTreatment.php"> View treatment  </a></li>
                               
                            </ul>
                        </li>
                         <li>
                            <a href="#"><i class="fa fa-picture-o"></i> <span>Manage recruitment </span> <span class="menu-arrow"></span></a>
                            <ul style="display: none;">
                                 <li><a href="addRecruitment.php"> Add recruitment  </a></li>
                            
                                <li><a href="viewRecruitment.php"> View recruitment  </a></li>
                                 
                            </ul>
                        </li>
                        <li>
                            <a href="viewPhoto.php"><i class="fa fa-picture-o"></i><span>View photos/videos</span></a>
                            
                        </li>
                        <li>
                            <a href="viewTips.php"><i class="fa fa-briefcase"></i> <span>View tips</span></a>
                            
                        </li>
                         
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
							<span class="dash-widget-bg1"><i class="fa fa-stethoscope" aria-hidden="true"></i></span>
							<div class="dash-widget-info text-right">
								<h3>98</h3>
								<span class="widget-title1">Doctors <i class="fa fa-check" aria-hidden="true"></i></span>
							</div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg2"><i class="fa fa-user-o"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>1072</h3>
                                <span class="widget-title2">Patients <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg3"><i class="fa fa-user-md" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>72</h3>
                                <span class="widget-title3">Attend <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                        <div class="dash-widget">
                            <span class="dash-widget-bg4"><i class="fa fa-heartbeat" aria-hidden="true"></i></span>
                            <div class="dash-widget-info text-right">
                                <h3>618</h3>
                                <span class="widget-title4">Pending <i class="fa fa-check" aria-hidden="true"></i></span>
                            </div>
                        </div>
                    </div>
                </div>
				
            </div>
         
        </div> -->
      
