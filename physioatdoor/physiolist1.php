<?php 
    require 'dbconnect.php';
    $qry="SELECT * FROM table_physio_reg where isactive!=2";
    $rs2=mysqli_query($conn,$qry);

    include("header101.php"); ?>

    <section class="page-title text-center" style="background-image:url(3.jpg);">
        <div class="container">
            <div class="title-text">
                <h1>Physiotherapist</h1>
                <ul class="title-menu clearfix">
                    <li>
                        <a href="index1.php">home &nbsp;/</a>
                    </li>
                    <li>Physiotherapist</li>
                </ul>
            </div>
        </div>
    </section>

    <section class="team-section section">
        <div class="container">
            <div class="section-title text-center">
                <h3>Our 
                    <span>Physiotherapists</span>
                </h3>
                
            </div>
            <div class="row">

                <?php
                if(mysqli_num_rows($rs2)>0)
                {
                    while($row=mysqli_fetch_assoc($rs2))
                    {
                        $qrys="SELECT * FROM table_specialization where spec_id = '".$row['spec_id']."'";
                        $rss=mysqli_query($conn,$qrys);
                        $rows=mysqli_fetch_assoc($rss);

                        ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="team-member">
                                <img src="<?php echo $row['photo'];?>" alt="doctor" class="img-responsive profileimage" >
                                <div class="contents text-center">
                                    <h4><?php echo $row['physio_name'];?></h4>
                                    <p><?php echo $rows['spec_name']; ?></p>
                                    <a href="physiodetails.php?selectid=<?php echo $row['physio_id'];?>" class="btn btn-main">read more</a>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>

            </div>
        </section>
<?php include("footer.php"); ?>