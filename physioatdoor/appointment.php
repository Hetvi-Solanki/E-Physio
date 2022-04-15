<?php 
session_start();
require 'dbconnect.php';
/*require 'class.phpmailer.php';
require 'class.smtp.php';


// $qry="SELECT * FROM table_appointment INNER JOIN table_patient_reg ON table_appointment.u_id=table_patient_reg.u_id where table_appointment.isactive=1";

if (isset($_POST['Approve'])) 
{
 echo "<script>alert('Success');</script>";

    $name=$_POST['patient_name'];
    $email=$_POST['email'];
    $contact=$_POST['phone'];

    $body="Patient Name is : $name<br>
           Email is : $email<br>
           Contact is : $contact<br>
           Appointment Booked<br>";
    
    
    $sub="Contact Form Submitted From Website";
    $mail = new PHPMailer;

    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
    $mail->Username = 'dhruva0208v@gmail.com';          // SMTP username
    $mail->Password = 'MR.$ON!mr$.$on!300206'; // SMTP password
    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                 // TCP port to connect to

    $mail->setFrom($email,$name);
    //$mail->addReplyTo('physioatdoor1@gmail.com', 'PhysioAtDoor');
    $mail->addAddress('sonishravik6@gmail.com');   // Add a recipient
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    $mail->isHTML(true);  // Set email format to HTML

    $bodyContent = $body;
    
    $mail->Subject = $sub;
    $mail->Body    = $bodyContent;

/*$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    if($mail->send()) {
       echo "<script>alert('Mail not sent');</script>";
    } else {
       echo "<script>alert('Mail sent');</script>";
    }

}*/
$qry="SELECT * FROM appointment";
$rs2=mysqli_query($conn,$qry);
include 'header101.php';
?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               

<section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index1.php">home &nbsp;/</a>
                </li>
                <li>Appointment</li>
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
                                        <th class="text-center">Booking Id</th>
                                        <th class="text-center">Physio Id</th>
                                        <th class="text-center">Patient Name</th>
                                        <th class="text-center">Treatment</th>
                                        <th class="text-center">Time slot</th>
                                        <th class="text-center">Booking date</th>
                                        <th class="text-center">Phone Number</th>
                                        <th class="text-center">Email Id</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Approve</th>
                                        <th class="text-center">DisApprove</th>
                                          
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                        if (mysqli_num_rows($rs2)>0) { 
                                            while ($row=mysqli_fetch_assoc($rs2)) {
                                        //$qrys1="SELECT * FROM table_patient_reg where u_id = '".$row['u_id']."'";
                    //$rss1=mysqli_query($conn,$qrys1);
                    //$rows1=mysqli_fetch_assoc($rss1);
                                    ?> 
                                    <tr>
                                        
                                        <td><?php echo $row['booking_id']; ?></td>
                                        <td><?php echo $row['physio_id']; ?></td>
                                        <td><?php echo $row['patient_name']; ?></td>
                                        <td><?php echo $row['complaint']; ?></td>
                                        <td class="text-center"><?php echo $row['timeslot']; ?></td>
                                        <td class="text-center"><?php echo $row['booking_date']; ?></td>
                                        <td class="text-center"><?php echo $row['phone'];?></td>
                                        <td class="text-center"><?php echo $row['email'];?></td>
                                        <td class="text-center"><?php echo $row['address'];?></td>
                                         <td class="text-center"><a class="text-center text-danger" href="sms.php?email=<?php echo $row['email'];?>"><i class="fa fa-check-square-o"></i>Approve</a></td>  
                                          <!-- <td><button type="submit" name="Approve" class="btn btn-o btn-primary">
                                                            Approve
                                                        </button></td>  -->
                                        <td class="text-center"><a class="text-center text-primary" href="Disapprove_mail.php?email=<?php echo $row['email'];?>"><i class="fa fa-times-circle"></i>Disapprove</a></td>
                                        <!-- <td><button type="submit" name="Disapprove" class="btn btn-o btn-primary">
                                                            Disapprove
                                                        </button></td> -->
                                       
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