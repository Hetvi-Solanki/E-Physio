<?php 
require 'dbconnect.php';
$qry="SELECT * FROM table_area where isactive!=2";


// $qry="SELECT * FROM table_area INNER JOIN table_state ON table_area.state_id=table_state.state_id where table_area.isactive=1";

$rs=mysqli_query($conn,$qry);
include 'header.php';
?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title font-weight-bold">View Area</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">State Name</th>
                                        <th class="text-center">City Name</th>
                                        <th class="text-center">Area Name</th>
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
                                            $qrys="SELECT * FROM table_cities where city_id = '".$row['city_id']."'";
                    $rss=mysqli_query($conn,$qrys);
                    $rows=mysqli_fetch_assoc($rss);


                    $qrys1="SELECT * FROM table_state where state_id = '".$row['state_id']."'";
                    $rss1=mysqli_query($conn,$qrys1);
                    $rows1=mysqli_fetch_assoc($rss1);

                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $row['area_id'];?></td>
                                        <td class="text-center"><?php echo $rows1['state_name'];?></td>     
                                        <td class="text-center"><?php echo $rows['city_name'];?></td>
                                        
                                        <td class="text-center"><?php echo $row['area_name'];?></td>
                                        <td class="text-center">
                                        <?php 
                                        echo $row['isactive'];
                                        $i=$row['isactive'];
                                        ?>
                                            
                                        </td>
                                        <td class="text-center"><a class="text-center text-success" href="managearea.php?actionid=<?php echo $row['area_id'];?>&&isactive=<?php echo $row['isactive']?>">
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
                                        <td><a class="dropdown-item text-center text-danger" href="managearea.php?deleteid=<?php echo $row['area_id'];?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a></td>
                                        <td><a class="dropdown-item text-center text-primary" href="editarea.php?id=<?php echo $row['area_id'];?>"><i class="fa fa-pencil m-r-5"></i>Edit</a></td>
                                        
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
