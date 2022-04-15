<?php
require 'dbconnect.php';
$qry="SELECT * FROM table_treatment where isactive!=2";
$rs2=mysqli_query($conn,$qry);

 include("header101.php"); ?>

<!--Page Title-->
<section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Treatment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index1.php">home &nbsp;/</a>
                </li>
                <li>Treatment</li>
            </ul>
        </div>
    </div>
</section>


<section class="team-section section bg">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our 
                    <span>Treatments</span>
                </h3>
                
            </div>
            <div class="row">

                <?php
                if(mysqli_num_rows($rs2)>0)
                {
                    while($row=mysqli_fetch_assoc($rs2))
                    {
                        $qrys="SELECT * FROM table_treatment where treat_id = '".$row['treat_id']."'";
                    $rss=mysqli_query($conn,$qrys);
                    $rows=mysqli_fetch_assoc($rss);
                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <img src="<?php echo $row['image'];?>" alt="doctor" class="img-responsive profileimage" >
                                <div class="contents text-center">
                                    <h4><?php echo $rows['treat_name'];?></h4>
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
<!--End Service Section--> 
<?php include("footer.php"); ?>