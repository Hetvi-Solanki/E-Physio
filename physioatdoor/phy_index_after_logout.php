<?php 
session_start();
//echo $_SESSION['uid'];

require 'dbconnect.php';
$qry="SELECT * FROM table_treatment where isactive!=2 limit 5";
$rs2=mysqli_query($conn,$qry);


$qry1="SELECT * FROM table_physio_reg where isactive!=2 limit 3";
$rs1=mysqli_query($conn,$qry1);


include("logout1.php");



?>
<!--End Main Header -->

<!--=================================
=            Page Slider            =
==================================-->


<!--====  End of Page Slider  ====-->


<!--about section-->
<!--End about section-->



<!--Service Section-->

<section class="service-section bg-gray section bg">
    <div class="container">
        <div class="section-title text-center">
            <h3>Provided
                <span>Treatments</span>
            </h3>

        </div>
        <div class="row items-container clearfix">
        
            <?php
           if(mysqli_num_rows($rs2)>0)
           {
               
            while($row0=mysqli_fetch_assoc($rs2))
            {
                
                ?>
                
                
                <div class="item">
                    <div class="inner-box">

                        <div class="img_holder">
                            <a href="treatmentdetails1.php?treat_id=<?php echo $row0['treat_id'];?>">
                                <img src="<?php echo $row0['image'];?>" alt="doctor" class="img-responsive profileimage" >
                            </a>
                        </div>

                        <div class="image-content text-center">
                          
                            <a href="treatmentdetails1.php?treat_id=<?php echo $row0['treat_id'];?>" class="btn btn-main">
                            <h6><?php echo $row0['treat_name'];?></h6>
                            </a> 
                         </div>

                    </div>
                </div>

          <?php
      }
  }
  ?>
  
            
        </div>
    </div>
</section>
<!--End Service Section-->

<!--team section-->
<!-- <section class="team-section section">
    <div class="container">
        <div class="section-title text-center">
            <h3>Our Expert
                <span>Doctors</span>
            </h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem illo, rerum 
                <br>natus nobis deleniti doloremque minima odit voluptatibus ipsam animi?</p>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="assets/images/team/doctor-2.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Robert Barrethion</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="assets/images/team/doctor-lab-3.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Marry Lou</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="team-member">
                    <img src="assets/images/team/event-2.jpg" alt="doctor" class="img-responsive">
                    <div class="contents text-center">
                        <h4>Dr. Sansa Stark</h4>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, aspernatur.</p>
                        <a href="#" class="btn btn-main">read more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

 <section class="team-section section bg2">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our 
                    <span>Physiotherapists</span>
                </h3>
                
            </div>
            <div class="row">

                <?php
                if(mysqli_num_rows($rs1)>0)
                {
                    while($row1=mysqli_fetch_assoc($rs1))
                    {
                        $qrys="SELECT * FROM table_specialization where spec_id = '".$row1['spec_id']."'";
                        $rss=mysqli_query($conn,$qrys);
                        $rows=mysqli_fetch_assoc($rss);

                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <img src="<?php echo $row1['photo'];?>" alt="doctor" class="img-responsive profileimage" >
                                <div class="contents text-center">
                                    <h4><?php echo $row1['physio_name'];?></h4>
                                    <p><?php echo $rows['spec_name']; ?></p>
                                    <a href="physiodetails1.php?selectid=<?php echo $row1['physio_id'];?>" class="btn btn-main">read more</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </section>
<!--End team section-->
<section class="feature-section section bg">
        <div class="container">
           <div class="row">
              <div class="col-sm-12 col-xs-12">
                 <div class="image-content">
                    <div class="section-title text-center">
                       <h3>Best Features
                          <span>of Physiotherapist</span>
                      </h3>
                      
                  </div>
                  <div class="row">
                      <div class="col-sm-6">
                       <div class="item">
                        <div class="icon-box">
                       <!--   <figure>
                          <a href="#">
                           <img src="1.png" alt="">
                       </a>
                   </figure> -->
               </div>
               
               <h6>Personal Safety Benefits</h6>
               <p>Physiotherapy at home is safe, as it removes the burden of transport.Patients in severe pain can make it to their appointments.Patients may not have to drive in painful condition to search or visit any physiotherapist.</p>
           </div>
       </div>
       <div class="col-sm-6">
        <div class="item">
            <div class="icon-box">
            <!--  <figure>
              <a href="#">
               <img src="2.png" alt="">
           </a>
       </figure> -->
       
    </div>
    <h6>Comfort at Home</h6>
    <p>The environment at home is considered to be more comfortable for a patient as compared to the environment of the clinic.Presence of family members during the treatment process helps boost the morale of the patient to recover </p>
    </div>
    </div>
    <div class="col-sm-6">
       <div class="item">
        <div class="icon-box">
        <!--  <figure>
          <a href="#">
           <img src="3.png" alt="">
       </a>
    </figure> -->
    </div>
    <h6>Cost Effectiveness</h6>
    <p>Some physiotherapist tent to charge more for providing that services at home, it is still cost effective  in comparision  to visiting  a physiotherapy center.It is mainly because your travel cost are saved.Moreover, patient's travel may require an ambulance or special transport service considering to his/her condition.</p>
    </div>
    </div>
    <div class="col-sm-6">
       <div class="item">
        <div class="icon-box">
         <!-- <figure>
          <a href="#">
           <img src="4.png" alt="">
       </a>
    </figure> -->
    </div>
    <h6>Eliminates Obstacles</h6>
    <p> Here are many different circumstances that can prevent them from being able to receive adequate treatment, or which would cause them to delay treatment because they are unable to travel to the clinic.
     These issues could be anything from transportation issues to mobility issues as a result of injury, disability or illness.
    Home services make it possible for people to access and benefit from physiotherapy, despite the obstacles that may stand in the way of receiving treatment.  </p>  </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
  
<!--testimonial-section-->
<section class="testimonial-section" style="background: url(1.jpg);">
    <div class="container">
        <div class="section-title text-center">
            <h3>What Our
                <span>Patients Says</span>
            </h3>
        </div>
        <?php
            $qry1="SELECT * FROM table_feedback where isactive!=2";
$rs1=mysqli_query($conn,$qry1);


            ?>
        <div class="testimonial-carousel">
            <!--Slide Item-->
          
            <?php
                 if(mysqli_num_rows($rs1)>0)
                 {
                  while($row1=mysqli_fetch_assoc($rs1))
                  {

                    $qrys="SELECT * FROM table_patient_reg where u_id = '".$row1['u_id']."'";
                    $rss=mysqli_query($conn,$qrys);
                    $rows=mysqli_fetch_assoc($rss);

                    ?>

            <div class="slide-item">
                <div class="inner-box text-center">
                    <div class="image-box">
                        <figure>
                            <img src="<?php echo $rows['photo']; ?>" alt="">
                        </figure>
                    </div>
                    <h6><?php echo $rows['u_fname']; ?></h6>
                    <p><?php echo $row1['description']; ?></p>
                </div>
            </div>

             <?php
                    }
                }
                ?>
 
          
        </div>
    </div>
</section>
<!--End testimonial-section-->

<!-- Contact Section -->


<!--footer-main-->
<?php include("footer.php");?>