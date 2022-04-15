 <?php 

require 'dbconnect.php';
$qry="SELECT * FROM table_physio_reg where isactive!=2";
// $qry="SELECT * FROM table_physio_reg INNER JOIN table_state ON table_physio_reg.state_id=table_state.state_id where table_physio_reg.isactive=1";

$rs=mysqli_query($conn,$qry);
 include('header.php');
?>



        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title font-weight-bold">View PhysioTherapist</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0 datatable table-bordered">
                                <thead>
                                    <tr>
                                        <th class="text-center">ID</th>
                                        <th class="text-center">Physio Name</th>
                                        <th class="text-center">Password</th>
                                        <th class="text-center">DOB</th>
                                        <th class="text-center">Email</th>
                                        <th class="text-center">Contact</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">State</th>
                                        <th class="text-center">City</th>
                                        <th class="text-center">Area</th>
                                         <th class="text-center">Photo</th>
                                        <th class="text-center">Total experience</th>
                                        <th class="text-center">Degree</th>
                                        <th class="text-center">Specialization</th>
                                       
                                        <th class="text-center">Security Question</th>
                                        <th class="text-center">Answer</th>
                                        <th class="text-center">Document</th>
                                       <th class="text-center">isActive</th>
                                        <th class="text-center">ACTION</th>

                                        <th class="text-center">DELETE</th>
                                       
                                    </tr>
                                </thead>
                                <tbody>
                                      <?php
                                        if (mysqli_num_rows($rs)>0) {
                                          
                                            while ($row=mysqli_fetch_assoc($rs)) {
                    $qrys="SELECT * FROM table_cities where city_id = '".$row['city_id']."'";
                    $rss=mysqli_query($conn,$qrys);
                    $rows=mysqli_fetch_assoc($rss);


                    $qrys1="SELECT * FROM table_state where state_id = '".$row['state_id']."'";
                    $rss1=mysqli_query($conn,$qrys1);
                    $rows1=mysqli_fetch_assoc($rss1);
                    
                    $qrys2="SELECT * FROM table_area where area_id = '".$row['area_id']."'";
                    $rss2=mysqli_query($conn,$qrys2);
                    $rows2=mysqli_fetch_assoc($rss2);

                     $qrys3="SELECT * FROM table_degree where degree_id = '".$row['degree_id']."'";
                    $rss3=mysqli_query($conn,$qrys3);
                    $rows3=mysqli_fetch_assoc($rss3);


                    $qrys4="SELECT * FROM table_specialization where spec_id = '".$row['spec_id']."'";
                    $rss4=mysqli_query($conn,$qrys4);
                    $rows4=mysqli_fetch_assoc($rss4);
                    
                    $qrys5="SELECT * FROM table_sec_q_details where Seq_id = '".$row['Seq_id']."'";
                    $rss5=mysqli_query($conn,$qrys5);
                    $rows5=mysqli_fetch_assoc($rss5);
                                       
                                    ?>
                                    <tr>
                                        <td><?php echo $row['physio_id']; ?></td>
                                        <td><?php echo $row['physio_name']; ?></td>
                                        <td><?php echo $row['password']; ?></td>
                                        <td><?php echo $row['physio_dob']; ?></td>
                                        <td><?php echo $row['email']; ?>@gmail.com</td>
                                        <td><?php echo $row['cont_no']; ?></td>
                                        <td><?php echo $row['address']; ?></td>
                                        <td><?php echo $rows1['state_name']; ?></td>
                                        <td><?php echo $rows['city_name']; ?></td>
                                        <td><?php echo $rows2['area_name']; ?></td>
                                         <td><img src="../physio/<?php echo $row['photo'];?>" alt="" height="100" width="100"></td>
                                        <td class="text-center"><?php echo $row['total_exp']; ?></td>
                                        <td><?php echo $rows3['degree_name']; ?></td>
                                        <td><?php echo $rows4['spec_name']; ?></td>
                                      
                                        <td><?php echo $rows5['que_name']; ?></td>
                                        <td><?php echo $row['answer']; ?></td>
                                        <td><img src="<?php echo $row['doc_upload'];?>" alt="" height="100" width="100"></td>
                                         <td class="text-center">
                                        <?php 
                                        echo $row['isactive'];
                                        $i=$row['isactive'];
                                        ?>
                                        </td>
                                        <td class="text-center"><a class="text-center text-success" href="managephysio.php?actionid=<?php echo $row['physio_id'];?>&&isactive=<?php echo $row['isactive'];?>">
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
                                        <td class="text-center"><a class="text-center text-danger" href="managephysio.php?deleteid=<?php echo $row['physio_id'];?>"><i class="fa fa-trash-o m-r-5"></i> Delete</a></td>
                                       
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