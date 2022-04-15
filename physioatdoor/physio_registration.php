<?php

require 'dbconnect.php';
$qrys="SELECT * FROM table_state";
$rss=mysqli_query($conn,$qrys);
 include('header.php');

 ?>
<section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Physio Registration Form</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="home.php">home &nbsp;/</a>
                </li>
                <li>Physio Registration Form</li>
            </ul>
        </div>
    </div>
</section>


<section class="section contact bg">
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form action="managephysio.php" class="row" enctype="multipart/form-data" method="post">

                        <div class="form-group col-md-6">
                            <label>Physiotherapist Name : </label>
                            <input type="text" name="physio_name" class="form-control" value="" maxlength="50" required="">

                        </div>
                        <div class="form-group col-md-6">
                            <label>Password : </label>
                            <input type="password" name="password" class="form-control" value="" maxlength="8" required="">

                        </div>  



                        <div class="form-group col-md-6">
                            <label>Date Of Birth : </label>
                            <input type="date" name="physio_dob" class="form-control" value="" maxlength="50" required="">

                        </div>

                        <div class="form-group col-md-6">
                            <label>Email : </label>
                            <input type="email" name="email" class="form-control" value="" maxlength="30" required="">

                        </div>


                        <div class="form-group col-md-6">
                            <label>Contact No. : </label>
                            <input type="tel" name="cont_no" class="form-control" value="" maxlength="12" required="">

                        </div>
                        <div class="form-group col-md-6">
                            <label>Total experience : </label>
                            <input type="text" name="total_exp" class="form-control" value="" maxlength="12" >

                        </div>
                        <div class="form-group col-md-12">
                            <label>Address : </label>
                            <textarea name="address" class="form-control" ></textarea>

                        </div>


                        <div class="form-group col-md-6">
                            <label>Photo : </label>
                            <input type="file" name="image" >

                        </div>
                        <div class="form-group col-md-6">
                            <label>Document upload: </label>
                            <input type="file" name="image1"  >

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



               <div class="form-group col-md-4">
                <label>Degree : </label><br>
                <select name="degree_id" class="form-control">
                    <?php
                    $qry="SELECT * FROM table_degree";
                    $rs=mysqli_query($conn,$qry);
                    while($row=mysqli_fetch_assoc($rs))
                    {
                       ?>
                       <option value="<?php echo $row['degree_id'];?>"><?php echo $row['degree_name'];?></option>    
                       <?php
                   }
                   ?>


               </select>

            </div>

            <div class="form-group col-md-4">
                <label>Specialization : </label><br>
                <select name="spec_id" class="form-control">
                    <?php
                    $qry="SELECT * FROM table_specialization";
                    $rs=mysqli_query($conn,$qry);
                    while($row=mysqli_fetch_assoc($rs))
                    {
                       ?>
                       <option value="<?php echo $row['spec_id'];?>"><?php echo $row['spec_name'];?></option>    
                       <?php
                   }
                   ?>


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
    $(document).ready(function(){
      // alert();
      $("#state").change(function(e){
        var state_id=$(this).val();
        // alert(sub);
        //var first=$("#fn").val();
        // alert(first);
        e.preventDefault();

        $.ajax({
          type: "POST",
          url: "sub.php",
          datatype: "html",
          data:{state:state_id},            
          success: function(result){
            // alert(result);
            $("#city").html(result);
          }
        });
      });
      $("#city").change(function(e){
        var city_id=$(this).val();
        // alert(sub);
        // var first=$("#fn").val();
        // alert(first);
        e.preventDefault();

        $.ajax({
          type: "POST",
          url: "sub1.php",
          datatype: "html",
          data:{city:city_id},            
          success: function(result){
            // alert(result);
            $("#area").html(result);
          }
        });
      });
    });

  </script>


<?php include('footer.php');?>