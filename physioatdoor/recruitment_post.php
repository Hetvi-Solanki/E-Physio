

 <?php 
require 'dbconnect.php';
$qry="SELECT * FROM table_recruitment where isactive!=2";
$rs2=mysqli_query($conn,$qry);


 include 'header101.php'; ?> 
 <section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Recruitments</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index1.php">home &nbsp;/</a>
                </li>
                <li>Recruitments</li>
            </ul>
        </div>
    </div>
</section>


<section class="gallery bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="section-title text-center">
                    <h3>Recruitment Post
                        <!-- <span>of Our Hospital</span> -->
                    </h3>
                    <!-- <p>Leverage agile frameworks to provide a robust synopsis for high level overv-
                        <br>iews. Iterative approaches to corporate strategy...</p> -->
                </div>
            </div>
             <?php
           if(mysqli_num_rows($rs2)>0)
           {
            while($row=mysqli_fetch_assoc($rs2))
            {
                

                ?>
            <div class="col-md-4 col-sm-6">
                <div class="gallery-item">
                    <img src="<?php echo $row['image'];?>" class="img-responsive" alt="gallery-image" style="height: 360px; !important">
                   <!--  <a data-fancybox="images" href="../admin/<?php echo $row['image'];?>"></a> -->
                    <!-- <h3>Facility 01</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque, in.</p> -->
                </div><br><br>
                <div class="image-content text-center">
                        <span>Better Service At Low Cost</span>
                        <a href="#">
                            <h6><?php echo $row['title'];?></h6>
                        </a>
                        <p><?php echo $row['description'];?></p>
                    </div>
            </div>
           
          <?php
      }
  }
  ?>
        </div>
    </div>
</section>
<?php include 'footer.php';
?>



