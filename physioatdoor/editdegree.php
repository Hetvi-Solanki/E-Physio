<?php 
require 'dbconnect.php';
$qrya="SELECT * FROM table_degree where degree_id='".$_GET['id']."'";
$rsa=mysqli_query($conn,$qrya);
$rowa=mysqli_fetch_assoc($rsa);
include('header.php');?>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Degree</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="manageupdatedegree.php" data-parsley-validate="" method="post">
                            <div class="row">
                                <div class="col-sm-12">

                                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                    <div class="form-group">
                                        <label>Degree Name:<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required name="degree_name" value="<?php echo $rowa['degree_name'];?>">
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit" >Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>

        <?php include('footer.php');?>