<?php include('header.php');?>
<div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Manage Profile</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <form action="#" data-parsley-validate="">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        
                                        <label>Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text" required="" name="admin_name">
                                    </div>
                                    <div class="form-group">

                                        <label>Email id:<span class="text-danger">*</span></label>
                                        <input class="form-control" type="email" required="" name="email">
                                    </div>
                                    <div class="form-group">

                                        <label>Phone no.:<span class="text-danger">*</span></label>
                                        <input class="form-control" type="tel" required="" name="phn">
                                    </div>
                                     <div class="form-group">

                                        <label>Profile pic:<span class="text-danger">*</span></label>
                                        <input class="form-control" type="file" required="" name="profile">
                                    </div>
                                     <div class="form-group">

                                        <label>Password:<span class="text-danger">*</span></label>
                                        <input class="form-control" type="password" required="" name="password">
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