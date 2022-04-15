<?php 
require 'dbconnect.php';
$qrya="SELECT * FROM table_post_photo_video where post_id='".$_GET['id']."'";
$rsa=mysqli_query($conn,$qrya);
$rowa=mysqli_fetch_assoc($rsa);

include 'header.php';
?>

<section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Edit Media Posts</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Edit Media posts</li>
            </ul>
        </div>
    </div>
</section>


<section class="section contact">
    <!-- container start -->
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form action="manageupdatemedia.php" class="row" data-parsley-validate="" enctype="multipart/form-data" method="post">
                        <!-- name -->
                    <input type="hidden" name="id" value="<?php echo $_GET['id'];?>">
                        <div class="col-md-12">
                            <label>Title:</label>
                            <input type="text" name="title" value="<?php echo $rowa['title'];?>" class="form-control main" placeholder="Title for tip..." required>
                        </div>
                         <img src="<?php echo $rowa['photo_video'];?>" height="100" width="100">
                        <div class="col-md-12 ">
                            <label name="image_tips">Upload Media :</label>
                            <input type="file" name="image" value="Upload image" required><br>
                        </div>
                        
                       <div class="form-group">
                                        <label>Treatment Name <span class="text-danger">*</span></label>

                                        <select name="treat_id" class="form-control">
                                            <?php
                                            
                                            $qry="SELECT * FROM table_treatment";
                                            $rs=mysqli_query($conn,$qry);
                                            while($row=mysqli_fetch_assoc($rs))
                                            {
                                             ?>
                                             <option value="<?php echo $row['treat_id'];?>"
                                              <?php 
                                              if($row['treat_id'] == $rowa['treat_id'])
                                              {
                                                echo "selected";
                                              }
                                             ?>
                                             ><?php echo $row['treat_name'];?></option>    
                                            <?php
                                            }
                                            ?>
                                            
                                            
                                        </select>
                                    </div>

                       
                       
                        <!-- message -->
                        <div class="col-md-12">
                            <label>Description:</label>
                            <input class="form-control" type="text" required name="description" value="<?php echo $rowa['description'];?>">
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" type="submit">Save</button>


                            
                        </div>
                    </form>
                    <!-- contact form end -->
                    
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>


<?php include 'footer.php';
?>