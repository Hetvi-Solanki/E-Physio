<?php include('header.php');?>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 mt-5">
                        <h4 class="page-title font-weight-bold">Add Area</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="managearea.php" data-parsley-validate="" method="post">
                            <div class="row">
                                <div class="col-sm-12">

                                     <div class="form-group">
                                        <label>State Name <span class="text-danger">*</span></label>

                                        <select name="state_id" class="form-control">
                                            <?php
                                            require 'dbconnect.php';
                                            $qry="SELECT * FROM table_state";
                                            $rs1=mysqli_query($conn,$qry);
                                            while($row=mysqli_fetch_assoc($rs1))
                                            {
                                             ?>
                                             <option value="<?php echo $row['state_id'];?>"><?php echo $row['state_name'];?></option>    
                                            <?php
                                            }
                                            ?>
                                            
                                            
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>City Name <span class="text-danger">*</span></label>

                                        <select name="city_id" class="form-control">
                                            <?php
                                            require 'dbconnect.php';
                                            $qry="SELECT * FROM table_cities";
                                            $rs1=mysqli_query($conn,$qry);
                                            while($row=mysqli_fetch_assoc($rs1))
                                            {
                                             ?>
                                             <option value="<?php echo $row['city_id'];?>"><?php echo $row['city_name'];?></option>    
                                            <?php
                                            }
                                            ?>
                                            
                                            
                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <label>Area Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required name="area_name">
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