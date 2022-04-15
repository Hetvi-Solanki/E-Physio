<?php 
require 'dbconnect.php';
$qry="SELECT * FROM table_state where isactive!=2";
$rs2=mysqli_query($conn,$qry);

include 'header.php';
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title font-weight-bold">View State</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable table-bordered">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>State Name</th>
                                        <th class="text-center">isActive</th>
                                        <th class="text-center">ACTION</th>
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


                                    ?>
                                    <tr>
                                        <td><?php echo $row['state_id'];?></td>
                                        <td><?php echo $row['state_name'];?></td>
                                        <td class="text-center">
                                        <?php 
                                        echo $row['isactive'];
                                        $i=$row['isactive'];
                                        ?>
                                            
                                        </td>
                                        <td class="text-center"><a class="text-center text-success" href="managestate.php?actionid=<?php echo $row['state_id'];?>&&isactive=<?php echo $row['isactive']?>">
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
                                        <td><a class="dropdown-item text-center text-danger" href="managestate.php?deleteid=<?php echo $row['state_id'];?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a></td>
                                        <td><a class="dropdown-item text-center text-primary" href="editstate.php?id=<?php echo $row['state_id'];?>"><i class="fa fa-pencil m-r-5"></i>Edit</a></td>
                                        
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
    
<?php include 'footer.php';
?> 
