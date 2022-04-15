<?php 
require 'dbconnect.php';
$qrys="SELECT * FROM table_state";
$rss=mysqli_query($conn,$qrys);
include('header.php');

?>
<section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Patient Registration Form</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Patient Registration Form</li>
            </ul>
        </div>
    </div>
</section>

<section class="section contact bg">
    <!-- container start -->
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form action="managepatient.php" class="row" enctype="multipart/form-data" method="post">

                        <div class="form-group col-md-6">
                            <label>First Name : </label>
                            <input type="text" name="u_fname" class="form-control" value="" maxlength="50" required="">

                        </div>

                        <div class="form-group col-md-6">
                            <label>Last Name : </label>
                            <input type="text" name="u_lname" class="form-control" value="" maxlength="50" required="">

                        </div>

                        <div class="form-group col-md-6">
                            <label>Date Of Birth : </label>
                            <input type="date" name="dob" class="form-control" value="" maxlength="50" required="">

                        </div>

                        <div class="form-group col-md-6">
                            <label>Email : </label>
                            <input type="email" name="email" class="form-control" value="" maxlength="30" required="">

                        </div>

                        <div class="form-group col-md-6">
                            <label>Age : </label>
                            <input type="text" name="age" class="form-control" value="" maxlength="3" required="">

                        </div>
                        <div class="form-group col-md-6">
                            <label>Contact No. : </label>
                            <input type="tel" name="cont_no" class="form-control" value="" maxlength="12" required="">

                        </div>

                        <div class="form-group">
                            <label class="col-md-2">Gender : </label>
                            <div class="col-md-4">
                                <div class="col-md-2">
                                    <label class="radio">
                                        <input type="radio" name="gender" value="Male" id="radio1"/>Male
                                    </label>
                                </div>
                                <div class="col-md-2">
                                    <label class="radio">
                                        <input type="radio" name="gender" value="Female" id="radio2"/>Female
                                    </label>
                                </div>
                            </div>

                        </div>
                        <div class="form-group col-md-6">
                            <label>Photo : </label>
                            <input type="file" name="image"  >

                        </div>

                        <div class="form-group col-md-12">
                            <label>Address : </label>
                            <textarea name="address" class="form-control"></textarea>

                        </div>

                  <div class="form-group col-md-4">
                            <label>State : </label><br>
                            <select name="state_id" class="form-control" id="state">
                                <option>-----choose option------</option>
  <?php

  while($rows=mysqli_fetch_assoc($rss))
  {
  ?>
  <option value="<?php echo $rows['state_id'];?>"><?php echo $rows['state_name'];?></option>
  <?php
  }
  ?>


                           </select>

                       </div>



                       <div class="form-group col-md-4">
                        <label>City : </label>

                        <select name="city_id" class="form-control" id="city">
                           <option>-----option-----</option>


                       </select>

                   </div>

                   <div class="form-group col-md-4">
                    <label>Area : </label>
                    <select name="area_id" class="form-control" id="area">
                      <option>-----option-----</option>

                   </select>

               </div>





                     <div class="form-group  col-md-6">
                        <label>Choose Question : </label>
                         <select name="Seq_id" class="form-control">
                                <?php
                                $qry="SELECT * FROM table_sec_q_details";
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
                    <div class="form-group col-md-6">
                        <label>Answer : </label>
                        <input type="text" name="answer" class="form-control" value="" maxlength="12" required="">
                        
                    </div>






                    <div class="form-group col-md-6">
                        <label>Password : </label>
                        <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                        
                    </div>  

                    <div class="col-md-12 text-right">
                        <button class="btn btn-style-one" type="submit" name="btn_submit">Submit</button>
                    </div>

                </form>
                <!-- contact form end -->
            </div>
        </div>
    </div>
</div>
<!-- container end -->
</section>


<script type="text/javascript"> 
    jQuery(document).ready(function($) {


        $('#phy').css('color', 'black');
        $('#p').css('color', 'blue');

        $('#p').click(function(event) {
            /* Act on the event */
            $(this).css('color', 'blue');
            $('#phy').css('color', 'black');
        });

        $('#phy').click(function(event) {
            /* Act on the event */
            $(this).css('color', 'blue');
            $('#p').css('color', 'black');
        });
    });
</script>
<?php include('footer.php');?>