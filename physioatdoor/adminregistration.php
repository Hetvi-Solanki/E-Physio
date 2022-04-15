<?php 
require 'dbconnect.php';


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="adminlogin.css">
</head>
<body>

    <!------ Include the above in your HEAD tag ---------->

    <div class="container register">
        <div class="row">
            <div class="col-md-3 register-left">
                <img src="https://image.ibb.co/n7oTvU/logo_white.png" alt=""/>
                <h3>Welcome</h3>
                <h1>ADMIN</h1><br><br>
                <!--  <input type="button" name="" value="Login" href="login.php"/><br/> -->
                <button type="button" class="btn btn-block text-primary">
                    <a href="login2.php">Login</a></button>
                </div>
                <div class="col-md-9 register-right">
                        <!-- <ul class="nav nav-tabs nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Employee</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Hirer</a>
                            </li>
                        </ul> -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3 class="register-heading">Admin Registration</h3>
                                <form method="post" action="manageadmin.php">
                                    <div class="row register-form">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="First Name *" name="firstname" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="Last Name *" name="lastname" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="password" class="form-control" placeholder="Password *" name="password" value="" />
                                            </div>
                                           <!--  <div class="form-group">
                                                <input type="password" class="form-control" name="cpassword" placeholder="Confirm Password *" value="" />
                                            </div> -->
                                            <div class="form-group">
                                                <div class="maxl">
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" value="male" >
                                                        <span> Male </span> 
                                                    </label>
                                                    <label class="radio inline"> 
                                                        <input type="radio" name="gender" value="female">
                                                        <span>Female </span> 
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Your Email *" name="email" value="" />
                                            </div>
                                            <div class="form-group">
                                                <input type="text" minlength="10" maxlength="10" name="cont_no" class="form-control" placeholder="Your Phone *" value="" />
                                            </div>
                                            <div class="form-group">
                                                <select class="form-control" name="Seq_id">
                                                   
                                                    <?php
                                                    $qry="SELECT * FROM table_sec_q_details";
                                                    $rs1=mysqli_query($conn,$qry);
                                                    while($row=mysqli_fetch_assoc($rs1))
                                                    {
                                                       ?>
                                                       <option value="<?php echo $row['Seq_id'];?>"><?php echo $row['que_name'];?></option>    
                                                       <?php
                                                   }
                                                   ?>
                                               </select>
                                           </div>
                                           <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Answer *" value="" name="answer"/>
                                        </div>
                                        
                                           <button class="btn btn-style-one btnRegister" type="submit" name="btn_submit">Submit</button>


                                    </div>
                                </form>
                            </div>
                            
                        </div>
                           <!--  <div class="tab-pane fade show" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3  class="register-heading">Apply as a Hirer</h3>
                                <div class="row register-form">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="First Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Last Name *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Email *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="text" maxlength="10" minlength="10" class="form-control" placeholder="Phone *" value="" />
                                        </div>


                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Confirm Password *" value="" />
                                        </div>
                                        <div class="form-group">
                                            <select class="form-control">
                                                <option class="hidden"  selected disabled>Please select your Sequrity Question</option>
                                                <option>What is your Birthdate?</option>
                                                <option>What is Your old Phone Number</option>
                                                <option>What is your Pet Name?</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="`Answer *" value="" />
                                        </div>
                                        <input type="submit" class="btnRegister"  value="Register"/>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>

            </div>
        </body>
        </html>