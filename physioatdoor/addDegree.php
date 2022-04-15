<?php include('header.php');?>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 mt-5">
                        <h4 class="page-title font-weight-bold">Add Degree</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="managedegree.php" data-parsley-validate="" method="post">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label>Degree Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required="" name="degree_name">
                                    </div>
                                </div>
                                
                                
                                
                            </div>
                            
                            <div class="m-t-20 text-center">
                                <button class="btn btn-primary submit-btn" type="submit" name="adddegree">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
			
        </div>

        <?php include('footer.php');?>