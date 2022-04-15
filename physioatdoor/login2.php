<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
 <link rel="shortcut icon" type="image/x-icon" href="favicon.jpg">
    <title>Physio At Door-Admin Login</title>

  
  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <!-- Slick Carousel -->
  <!-- <link rel="stylesheet" href="slick.css"> -->
  <!-- <link rel="stylesheet" href="slick-theme.css"> -->
  <!-- FancyBox -->
  <link rel="stylesheet" href="jquery.fancybox.min.css">
  
  <!-- Stylesheets -->
  <link href="style.css" rel="stylesheet">
   <link href="login2.css" rel="stylesheet">
      <link href="validation.css" rel="stylesheet">
  <script src="jquery.js"></script>
<script src="bootstrap.min.js"></script>
<script src="bootstrap-select.min.js"></script>
<!-- Slick Slider -->
<script src="pluslick.min.js"></script>
<!-- FancyBox -->
<script src="pluginjquery.fancybox.min.js"></script>
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
<script src="gmap.js"></script>

<script src="validate.js"></script>
<script src="validation.js" type="text/javascript" charset="utf-8" async defer></script>
<script src="assewow.js"></script>
<script src="jquery-ui.js"></script>
<script src="timePicker.js"></script>
<script src="script.js"></script>
  
  <!--Favicon-->
  <link rel="shortcut icon" href="favicon.html" type="image/x-icon">
  <link rel="icon" href="favicon.html" type="image/x-icon">

  <style type="text/css" media="screen">
      .img
      {
        background-image: url('physio-logo.jpg');
        width: auto;
        height: 380px;
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center;
       /*  box-shadow: 2px 2px 2px #038197; */
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.16),0 2px 10px rgba(0, 0, 0, 0.12);
        margin-top: 80px;
        /* border: 1px solid black; */
      }
      .change_link
      {
        color: white;
      }
      .to_register
      {
        color: white;
        font-weight: bold;
        text-decoration: underline;
      }
      
  /*   .vl 
    {
      border-right: 1px solid  #48bdc5;
      height: 500px;
      position: absolute;
      left: 100%;
   
      top: 0;
    } */
    
  </style>
</head>


<body>
<div class="col-md-6 login-form-2">
                <div class="login-logo">
                        <img src="OLogo.jpg" alt="" />
                      </div>
                    <form action="checklogin2.php" data-parsley-validate="" method="post">
                      <h3>Admin Login</h3>
                      
                        <div class="form-group">
                          <input type="text" class="form-control" name="email" placeholder="Your Email *" value="" required="" />
                        </div>
                        <div class="form-group">
                          <input type="password" class="form-control" name="password" placeholder="Your Password *" value="" required="" />
                        </div>
                        <div class="form-group">
                          <input type="submit" class="btnSubmit" value="Login"  name="admin_login"/>
                        </div>
                        <div class="form-group">
                          <p class="change_link text-center"> Not an account ?
                            <a href="adminregistration.php" class="to_register">Register</a>
                          </p>
                        </div> 
                        <div class="form-group">
                          <a href="email.php" class="btnForgetPwd" id="phy_password" value="Login">Forget Password?</a>
                        </div>
                      </form>   
                </div>

</body>
</html>