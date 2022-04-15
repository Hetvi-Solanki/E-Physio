<?php 
require 'dbconnect.php';
$qry="SELECT * FROM table_recruitment where isactive!=2";
$rs=mysqli_query($conn,$qry);
include 'header.php';
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title font-weight-bold">View Recruitment Post</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">Id</th>
                                      
                                        <th class="text-center">Title</th>
                                        <th class="text-center">Image</th>
                                        <th class="text-center">Description</th>
                                        <th class="text-center">isActive</th>
                                        <th class="text-center">Action</th>
                                        <th class="text-center">DELETE</th>
                                        <th class="text-center">EDIT</th>
                                         
                                         
                                    </tr>
                                </thead>
                                <tbody>
                                     <?php
                                    if(mysqli_num_rows($rs)>0)
                                    {
                                        while($row=mysqli_fetch_assoc($rs))
                                        {


                                    ?>
                                    <tr>
                                        <td><?php echo $row['recruit_id']; ?></td>
                                        
                                        <td><?php echo $row['title']; ?></td>
                                        <td><img src="<?php echo $row['image'];?>" alt="" height="100" width="100"></td>
                                        <td><?php echo $row['description']; ?></td>
                                        <td class="text-center">
                                        <?php 
                                        echo $row['isactive'];
                                        $i=$row['isactive'];
                                        ?>
                                            
                                        </td>
                                         <td class="text-center"><a class="text-center text-success" href="managerecruitment.php?actionid=<?php echo $row['recruit_id'];?>&&isactive=<?php echo $row['isactive']?>">
                                        <?php
                                        if($i == 1)
                                        {
                                            echo "ACTIVE";
                                        }
                                        if($i == 0)
                                        {
                                            echo "BLOCK";
                                        }
                                        ?>
                                        </a></td>
                                        <td class="text-center"><a class="text-center text-danger" href="managerecruitment.php?deleteid=<?php echo $row['recruit_id'];?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a></td>
                                        <td class="text-center"><a class="text-center text-primary" href="editrecruit.php?id=<?php echo $row['recruit_id'];?>"><i class="fa fa-pencil m-r-5"></i> Edit</a></td>
                                       
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
        <script type="text/javascript">
            
        </script>
    
<?php include 'footer.php';
?> 
