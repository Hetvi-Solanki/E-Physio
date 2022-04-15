<?php
session_start();
require 'dbconnect.php';
//error_reporting(0);
//include('include/config.php');
//include('include/checklogin.php');
//check_login();
include 'header.php';
if(isset($_POST['submit']))
{
$physio_id=(isset($_GET['id']) ? $_GET['id'] : '');
$patient_name=$_POST['patient_name'];
$complaint=$_POST['complaint'];
$timeslot=$_POST['timeslot'];
$booking_date=$_POST['booking_date'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address=$_POST['address'];

$query=mysqli_query($conn,"insert into appointment(physio_id,patient_name,complaint,timeslot,booking_date,phone,email,address) values('$physio_id','$patient_name','$complaint','$timeslot','$booking_date','$phone','$email','$address')");
	if($query)
	{
		echo "<script>alert('Your appointment added for approve/disapprove. Wait for the mail from physiotherapist.');</script>";
	}

}
?>
<section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Book Appointment</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Book Appointment</li>
            </ul>
        </div>
    </div>
</section>

			<div class="container-fluid container-fullw bg-white">
							<div class="row-lg-12 ">
								<div class="col-md-12 ">
									
									<div class="row margin-top-30">
										<div class="col-lg-3 col-md-6">
													<form role="form" name="book" method="post" >

														<div class="form-group">
															<label for="patient_name">
																Patient Name
															</label>
							<input name="patient_name" class="form-control" required="required">
														</div>
														<div class="form-group">
															<label for="complaint">
																Treatement
															</label>
							<input name="complaint" class="form-control" required="required">
														</div>
														
													<div class="form-group">
															<label for="phone">
																Phone Number
															</label>
							<input name="phone" class="form-control" required="required">
														</div>
														<div class="form-group">
															<label for="email">
																Email Id
															</label>
							<input name="email" class="form-control" required="required">
														</div>
														<div class="form-group">
															<label for="address">
																Address
															</label>
							<input name="address" class="form-control" required="required">
														</div>
														
												<div class="form-group">
															<label for="booking_date">
																Date
															</label>
												<input class="form-control datepicker" name="booking_date"  required="required" data-date-format="yyyy-mm-dd">eg: 2022-04-09
	
														</div>
														
												<div class="form-group">
															<label for="timeslot">
														Time
															</label>
			<input class="form-control" name="timeslot" id="timepicker1" required="required">eg : 07:00 PM
														</div>		

														<div class="form-group">
														<button type="submit" name="submit" class="btn btn-o btn-primary" href="index.php">
															Submit
														</button>
													</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>

								<?php include 'footer.php';
?>
	