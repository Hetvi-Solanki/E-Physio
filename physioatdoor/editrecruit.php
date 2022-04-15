<?php 
require 'dbconnect.php';
$qrya="SELECT * FROM table_recruitment where recruit_id='".$_GET['id']."'";
$rsa=mysqli_query($conn,$qrya);
$rowa=mysqli_fetch_assoc($rsa);
include('header.php');?>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Edit Recruitment post</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="manageupdaterecruit.php" data-parsley-validate="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12">

                                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                                    <div class="form-group">
                                        <label>Title <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required name="title" value="<?php echo $rowa['title'];?>">
                                    </div>
                                    <img src="assets/img/post/<?php echo $rowa['image'];?>" height="100" width="100">
                                    <div class="form-group">
                                        <label>Image <span class="text-danger">*</span></label>

                                        <input class="form-control" type="file"  name="image">
                                    </div>

                                     <div class="form-group">
                                        <label>Description <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required name="description" value="<?php echo $rowa['description'];?>">
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