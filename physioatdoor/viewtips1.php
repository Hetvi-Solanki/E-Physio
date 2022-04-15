<?php 
require 'dbconnect.php';
$qry="SELECT * FROM table_tips_post where isactive!=2";
$rs2=mysqli_query($conn,$qry);


include 'header101.php';
?>

<section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Tips</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index1.php">home &nbsp;/</a>
                </li>
            
                <li>View Tips</li>
            </ul>
        </div>
    </div>
</section>


<section class="section contact bg">
    <!-- container start -->
    <div class="container">
        <div class="row">
            
            <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable table-bordered">
                                <thead>
                                    <tr>
                                        <!-- <th>id</th>  -->
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">Treatment Name</th>
                                        <th class="text-center">DELETE</th>
                                        <th class="text-center">EDIT</th>
                                          
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    if(mysqli_num_rows($rs2)>0)
                                    {
                                        while($row=mysqli_fetch_assoc($rs2))
                                        {
                                             $qrys1="SELECT * FROM table_treatment where treat_id = '".$row['treat_id']."'";
                                            $rss1=mysqli_query($conn,$qrys1);
                                            $rows1=mysqli_fetch_assoc($rss1);


                                    ?>
                                    <tr>
                                        <!--  <td><?php echo $row['tips_id']; ?></td> -->
                                        <td><?php echo $row['title']; ?></td>
                                        <td><?php echo $row['description']; ?></td>
                                        <td><?php echo $rows1['treat_name']; ?></td>
                                        
                                        
                                        <td class="text-center"><a class="text-center text-danger" href="managetips.php?deleteid=<?php echo $row['tips_id'];?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a></td>
                                        <td class="text-center"><a class="text-center text-primary" href="edittips.php?id=<?php echo $row['tips_id'];?>"><i class="fa fa-pencil m-r-5"></i> Edit</a></td>
                                       
                                        
                                    </tr>
                                     <?php
                                        }
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <!-- container end -->
</section>

<?php include 'footer.php';
?>