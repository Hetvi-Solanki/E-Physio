<?php 
require 'dbconnect.php';
$qrya="SELECT * FROM table_specialization where spec_id='".$_GET['id']."'";
$rsa=mysqli_query($conn,$qrya);
$rowa=mysqli_fetch_assoc($rsa);
include('header.php');?>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Specialization</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="manageupdatespecialization.php" data-parsley-validate="" method="post">
                            <div class="row">
                                <div class="col-sm-12">

                                     <div class="form-group">
                                        <label>State Name <span class="text-danger">*</span></label>

                                        <select name="degree_id" class="form-control">
                                            <?php
                                            
                                            $qry="SELECT * FROM table_degree";
                                            $rs=mysqli_query($conn,$qry);
                                            while($row=mysqli_fetch_assoc($rs))
                                            {
                                             ?>
                                             <option value="<?php echo $row['degree_id'];?>"
                                              <?php 
                                              if($row['degree_id'] == $rowa['degree_id'])
                                              {
                                                echo "selected";
                                              }
                                             ?>
                                             ><?php echo $row['degree_name'];?></option>    
                                            <?php
                                            }
                                            ?>
                                            
                                            
                                        </select>
                                    </div>

                                    

                                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                    <div class="form-group">
                                        <label>Specialization Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required name="spec_name" value="<?php echo $rowa['spec_name'];?>">
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>

        <?php include('footer.php');?>