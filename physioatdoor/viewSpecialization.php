<?php 
require 'dbconnect.php';
$qry="SELECT * FROM table_specialization where isactive!=2";

// $qry="SELECT * FROM table_specialization INNER JOIN table_degree ON table_specialization.degree_id=table_degree.degree_id where table_specialization.isactive=1";
$rs=mysqli_query($conn,$qry);


include 'header.php';
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12 mt-5">
                        <h4 class="page-title font-weight-bold">View Specialization </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">Id</th>
                                        <th class="text-center">Degree Name</th>
                                        
                                       
                                        <th class="text-center">Specialization</th>
                                        
                                        <th class="text-center">isActive</th>
                                        <th class="text-center">ACTION</th>

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

                                                $qrys="SELECT * FROM table_degree where degree_id = '".$row['degree_id']."'";
                    $rss=mysqli_query($conn,$qrys);
                    $rows=mysqli_fetch_assoc($rss);
                                    ?>
                                         <td class="text-center"><?php echo $row['spec_id'];?></td> 
                                
                                        <td class="text-center"><?php echo $rows['degree_name'];?></td> 
                                       
                                  
                                        <td class="text-center"><?php echo $row['spec_name'];?></td>
                                        <td class="text-center">
                                        <?php 
                                        echo $row['isactive'];
                                        $i=$row['isactive'];
                                        ?>
                                            
                                        </td>
                                        <td class="text-center"><a class="text-center text-success" href="managespecialization.php?actionid=<?php echo $row['spec_id'];?>&&isactive=<?php echo $row['isactive']?>">
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
                                        <td><a class="dropdown-item text-center text-danger" href="managespecialization.php?deleteid=<?php echo $row['spec_id'];?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a></td>
                                        <td><a class="dropdown-item text-center text-primary" href="editspecialization.php?id=<?php echo $row['spec_id'];?>"><i class="fa fa-pencil m-r-5"></i>Edit</a></td>
                                        
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
