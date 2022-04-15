<?php include('header.php');?>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 mt-5">
                        <h4 class="page-title font-weight-bold">Add Recruitment</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="managerecruitment.php" data-parsley-validate="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        
                                        <label>Recruitment Title <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required="" name="title">
                                    </div>
                                    <div class="form-group">
                                        
                                        <label>Recruitment Image <span class="text-danger">*</span></label>
                                        <input class="form-control" type="file" required="" name="image">
                                    </div>
                                    <div class="form-group">

                                        <label>Recruitment Description <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text"  required="" name="description">
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit" name="add_recruit">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>

        <?php include('footer.php');?>