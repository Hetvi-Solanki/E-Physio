 <?php 
require 'dbconnect.php';
$qry="SELECT * FROM table_contact where isactive!=2";


$rs=mysqli_query($conn,$qry);

 include('header.php');
?>



        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title font-weight-bold">View Contact</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">Id</th>
                                        <th class="text-center">User Name</th>
                                        <th class="text-center">Phone No.</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Message</th>
                                        <th class="text-center">isActive</th>
                                        <th class="text-center">ACTION</th>
                                        <th class="text-center">DELETE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                        if (mysqli_num_rows($rs)>0) {
                                          
                                            while ($row=mysqli_fetch_assoc($rs)) {
                                       
                                    ?>
                                    <tr>
                                        <td class="text-center"><?php echo $row['cont_id']; ?></td>
                                        <td><?php echo $row['u_name']; ?></td>
                                        <td class="text-center"><?php echo $row['ph_no']; ?></td>
                                        <td><?php echo $row['email']; ?></td>
                                        <td><?php echo $row['message']; ?></td>
                                        <td class="text-center">
                                        <?php 
                                        echo $row['isactive'];
                                        $i=$row['isactive'];
                                        ?>
                                        </td>
                                        <td class="text-center"><a class="text-center text-success" href="managecontact.php?actionid=<?php echo $row['cont_id'];?>&&isactive=<?php echo $row['isactive'];?>">
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
                                        <td class="text-center"><a class="text-center text-danger" href="managecontact.php?deleteid=<?php echo $row['cont_id'];?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a></td>
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
    <?php include('footer.php');
    ?>