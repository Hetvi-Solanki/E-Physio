<?php 
session_start();
if (!isset($_SESSION['id'])) 
{
  header("location:login.php");
}
require 'dbconnect.php';
$qry1="SELECT * FROM table_admin where id='".$_SESSION['id']."'";
$rs1=mysqli_query($conn,$qry1);
$row1=mysqli_fetch_assoc($rs1);

include('header.php');

?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 ">
                <h4 class="page-title font-weight-bold">Edit Profile</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <form action="manageupdateadmin.php" data-parsley-validate="" method="post">
                    <div class="row">
                        <div class="col-sm-12">

                            
                            <div class="form-group">
                                <label>First Name:<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" required name="firstname" value="<?php echo $row1['firstname'];?>">
                            </div>
                            <div class="form-group">
                                <label>Last Name:<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" required name="lastname" value="<?php echo $row1['lastname'];?>">
                            </div>


                            <div class="form-group">
                                <label>Email:<span class="text-danger">*</span></label>
                                <input class="form-control" type="text" required name="email" value="<?php echo $row1['email'];?>">
                            </div>

                            <div class="form-group">
                                <label>Password:<span class="text-danger">*</span></label>
                                <input class="form-control" type="password" required name="password" value="<?php echo $row1['password'];?>">
                            </div>

                            <div class="form-group">
                                <label>Gender:<span class="text-danger">*</span></label>
                               <div class="col-md-6">
                              <input type="radio" name="gender" value="Male" <?php if ($row1['gender']=="Male") {
                                echo "checked";
                              } ?> placeholder="">Male
                              <input type="radio" name="gender" value="Female" <?php if ($row1['gender']=="Female") {
                                echo "checked";
                              } ?> placeholder="">Female
                            </div>

                            <div class="form-group">
                                <label>Contact no:<span class="text-danger">*</span></label>
                                <input class="form-control" type="tel" required name="cont_no" value="<?php echo $row1['cont_no'];?>">
                            </div>
                        </div>
                    </div>



                </div>

                <div class="m-t-20 text-center">
                    <button class="btn btn-primary submit-btn" type="submit" name="btn_submit">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>

<?php include('footer.php');?>