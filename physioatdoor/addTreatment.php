<?php include('header.php');?>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 mt-5">
                        <h4 class="page-title font-weight-bold">Add Treatment</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="managetreatment.php" data-parsley-validate="" method="post" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        
                                        <label>Treatment Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required="" name="treat_name">
                                    </div>
                                    <div class="form-group">

                                        <label>Treatment Description <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required="" name="description">
                                    </div>

                                    <div class="form-group">
                                        
                                        <label>Treatment Image <span class="text-danger">*</span></label>
                                        <input class="form-control" type="file" required="" name="image">
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit" name="add_treat">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>

        <?php include('footer.php');?>