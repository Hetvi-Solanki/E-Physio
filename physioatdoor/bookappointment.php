<?php
session_start();
require 'class.phpmailer.php';
require 'class.smtp.php';

require 'dbconnect.php';


if (isset($_POST['btn_submit'])) 
{


$name=$_POST['name'];
    $email=$_POST['email'];
    $contact=$_POST['phone'];

    $body="Name is : $name<br>
           Email is : $email<br>
           Contact is : $contact<br>";
    
    
    $sub="Contact Form Submitted From Website";
    $mail = new PHPMailer;

    $mail->isSMTP();                                   // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                    // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                            // Enable SMTP authentication
    $mail->Username = 'physioatdoor1@gmail.com';          // SMTP username
    $mail->Password = '#physio#@door'; // SMTP password
    $mail->SMTPSecure = 'tls';                         // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                 // TCP port to connect to

    $mail->setFrom('physioatdoor1@gmail.com', 'PhysioAtDoor');
    $mail->addReplyTo('physioatdoor1@gmail.com', 'PhysioAtDoor');
    $mail->addAddress($email);   // Add a recipient
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');
    $mail->isHTML(true);  // Set email format to HTML

    $bodyContent = $body;
    
    $mail->Subject = $sub;
    $mail->Body    = $bodyContent;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }



    $target_dir = "/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);


    $date=date('y-m-d');

    $qry="INSERT INTO table_appointment(u_id,physio_id,name,phone,email,chief_complaint,timeslot,booking_date,image,dou,isactive) values('".$_SESSION['u_id']."','".$_POST['physio_id']."','".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['chief_complaint']."','".$_POST['timeslot']."','".$date."','".$_FILES["image"]["name"]."','".$date."',1)";
    $rs=mysqli_query($conn,$qry);
    if($rs)
    {
        echo "success";
        header("location:index.php");
        exit();
    }
    else
    {
        echo "error";
    }
}
$id = (isset($_GET['id']) ? $_GET['id'] : '');
// $date=str_replace("/","-",$_POST['d']);
// $newDate = date("m-d-Y",$date);
// echo $newDate;
//$timeslot = $_POST['timeslot']; 
//$new_date = date('y-m-d', $timestamp);

//$t=$_POST['t'];

$qry1="SELECT * FROM table_appointment where physio_id='".$id."'";

$rs1=mysqli_query($conn,$qry1);
// echo $qry;
if(mysqli_num_rows($rs1)>0)
{

    echo "Physio  is not available for this time";
    exit();


}
else
{
    echo "Physio is available in this time";
}


?>