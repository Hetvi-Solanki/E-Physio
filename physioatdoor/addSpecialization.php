<?php include('header.php');?>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 mt-5">
                        <h4 class="page-title font-weight-bold">Add Specialization</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="managespecialization.php" data-parsley-validate="" method="post">
                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="form-group">
                                        <label>Degree Name <span class="text-danger">*</span></label>

                                        <select name="degree_id" class="form-control">
                                            <?php
                                            require 'dbconnect.php';
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

                                    <div class="form-group">
                                        <label>Specialization Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required="" name="spec_name">
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit" name="add_spec">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>

        <?php include('footer.php');?>