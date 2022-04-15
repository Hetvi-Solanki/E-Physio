<?php 
require 'dbconnect.php';
$qrya="SELECT * FROM table_cities where city_id='".$_GET['id']."'";
$rsa=mysqli_query($conn,$qrya);
$rowa=mysqli_fetch_assoc($rsa);
include('header.php');?>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title font-weight-bold">Edit Area</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="manageupdatecity.php" data-parsley-validate="" method="post">
                            <div class="row">
                                <div class="col-sm-12">

                                     <div class="form-group">
                                        <label>State Name <span class="text-danger">*</span></label>

                                        <select name="state_id" class="form-control">
                                            <?php
                                            
                                            $qry="SELECT * FROM table_state";
                                            $rs=mysqli_query($conn,$qry);
                                            while($row=mysqli_fetch_assoc($rs))
                                            {
                                             ?>
                                             <option value="<?php echo $row['state_id'];?>"
                                              <?php 
                                              if($row['state_id'] == $rowa['state_id'])
                                              {
                                                echo "selected";
                                              }
                                             ?>
                                             ><?php echo $row['state_name'];?></option>    
                                            <?php
                                            }
                                            ?>
                                            
                                            
                                        </select>
                                    </div>

                                    

                                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                    <div class="form-group">
                                        <label>City Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required name="city_name" value="<?php echo $rowa['city_name'];?>">
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit" name="add_area">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>

        <?php include('footer.php');?>