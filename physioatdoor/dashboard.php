<?php 
require 'dbconnect.php';




include 'header2.php';?>
       

<html>
    <head>
         <link href="dashboard.css" rel="stylesheet">
    </head>
    <body>
    <div class="page-wrapper">
            <div class="content">
                <div class="row ar5">


                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget ar">
                            
                            <div class="dash-widget-info text-right ar2" id="box1">

                            <div class="dash-widget-bg1 ar1"><i class="fa fa-stethoscope" aria-hidden="true"></i></div>
                               <!--  <h3>98</h3> -->
                                <?php
                                       $rs3=mysqli_query($conn,"SELECT count(*) FROM table_physio_reg where isactive!=2");
                                       $row=mysqli_fetch_array($rs3);
                                       $total=$row[0];
                                       echo "<h3>".$total."</h3>";
                                    ?>
                                <div class="widget-title1 ar3">Physiotherapist <i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget ar">
                           
                            <div class="dash-widget-info text-right ar2" id="box2">
                                <br>
                            <div class="dash-widget-bg2 ar1"><i class="fa fa-user-o"></i></div>
                                <!-- <h3>1072</h3> -->
                                <?php
                                      $rs2=mysqli_query($conn,"SELECT count(*) FROM table_patient_reg where isactive!=2");
                                       $row=mysqli_fetch_array($rs2);
                                       $total=$row[0];
                                       echo "<h3>".$total."</h3>";
                                    ?>
                                <div class="widget-title2 ar3">Patients <i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                        <div class="dash-widget ar">
                            
                            <div class="dash-widget-info text-right ar2"id="box3" >
                                <br>
                            <div class="dash-widget-bg3 ar1"><i class="fa fa-user-md" aria-hidden="true"></i></div>
                                <!-- <h3>72</h3> -->
                                 <?php
                                      $rs1=mysqli_query($conn,"SELECT count(*) FROM table_appointment where isactive!=2");
                                       $row=mysqli_fetch_array($rs1);
                                       $total=$row[0];
                                       echo "<h3>".$total."</h3>";
                                    ?>
                                <div class="widget-title3 ar3">Appointment<i class="fa fa-check" aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                
            </div>
         
        </div>
        
    </body>
</html>
   
<?php include 'footer.php';?>
   