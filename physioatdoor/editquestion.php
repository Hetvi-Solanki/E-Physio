<?php 
require 'dbconnect.php';
$qrya="SELECT * FROM table_sec_q_details where Seq_id='".$_GET['id']."'";
$rsa=mysqli_query($conn,$qrya);
$rowa=mysqli_fetch_assoc($rsa);
include('header.php');?>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Questions</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="manageupdatequestion.php" data-parsley-validate="" method="post">
                            <div class="row">
                                <div class="col-sm-12">

                                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                    <div class="form-group">
                                        <label>Question Name:<span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required name="que_name" value="<?php echo $rowa['que_name'];?>">
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