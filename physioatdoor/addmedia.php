<?php include 'header101.php';
?>

<section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Media Posts</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index1.php">home &nbsp;/</a>
                </li>
                <li>Media posts</li>
            </ul>
        </div>
    </div>
</section>


<section class="section contact bg">
    <!-- container start -->
    <div class="container">
        <div class="row">
            
            <div class="col-md-12">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form action="managemedia.php" class="row" data-parsley-validate="" method="post" enctype="multipart/form-data">
                        <!-- name -->
                        

                        <div class="col-md-12">
                            <label>Select Treatment:</label>
                             <select name="treat_id" class="form-control">
                                            <?php
                                            require 'dbconnect.php';
                                            $qry="SELECT * FROM table_treatment";
                                            $rs1=mysqli_query($conn,$qry);
                                            while($row=mysqli_fetch_assoc($rs1))
                                            {
                                             ?>
                                             <option value="<?php echo $row['treat_id'];?>"><?php echo $row['treat_name'];?></option>    
                                            <?php
                                            }
                                            ?>
                                            
                                            
                                        </select>
                        </div>
                        <div class="col-md-12">
                            <label>Title:</label>
                            <input type="text" name="title" class="form-control main" placeholder="Title for tip..." required>
                        </div>

                        <div class="col-md-12 ">
                            <label>Upload Media :</label>
                            <input type="file" name="image"  required><br>
                        </div>
                        
                       
                       
                        <!-- message -->
                        <div class="col-md-12">
                            <label>Description:</label>
                            <textarea name="description" rows="10" class="form-control main" placeholder="description" required></textarea>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" type="submit" name="btn_media">Upload tips as media</button>


                            
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