<?php
require 'dbconnect.php';
$qry="SELECT * FROM table_post_photo_video where isactive!=2";
$rs1=mysqli_query($conn,$qry);

 include 'header.php'; ?>
<section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Photos</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Photos</li>
            </ul>
        </div>
    </div>
</section>




<section class="team-section section">
        <div class="container">
            <div class="section-title text-center">
                <h3> 
                   Media
                </h3>
                
            </div>
            <div class="row">

                <?php
                if(mysqli_num_rows($rs1)>0)
                {
                    while($row=mysqli_fetch_assoc($rs1))
                    {
                        $qrys="SELECT * FROM table_treatment where treat_id = '".$row['treat_id']."'";
                    $rss=mysqli_query($conn,$qrys);
                    $rows=mysqli_fetch_assoc($rss);
                
                       
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <img src="<?php echo $row['photo_video'];?>" alt="doctor" class="img-responsive profileimage" >
                                <div class="contents text-center">
                                      <h3><?php echo $row['title'];?></h3>
                                    <h5><?php echo $rows['treat_name'];?></h5>

                                    <p><?php echo $row['description'];?></p>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </section>

<?php include 'footer.php'; ?>