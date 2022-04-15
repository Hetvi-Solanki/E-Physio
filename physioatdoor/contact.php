<?php include("header.php"); ?>

<section class="page-title text-center" style="background-image:url(3.jpg);">
    <div class="container">
        <div class="title-text">
            <h1>Contact</h1>
            <ul class="title-menu clearfix">
                <li>
                    <a href="index.php">home &nbsp;/</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
</section>
<!--End Page Title-->

<!--==================================
=            Contact Form            =
===================================-->
<section class="section contact bg1">
    <!-- container start -->
    <div class="container">
        <div class="row">
            <div class="col-md-4" >
                <!-- address start -->
                 <img src="c6.jpg" class="responsive" alt="story" height="330px"  width="340px;">
                <!-- address end -->
            </div>
            <div class="col-md-8">
                <div class="contact-form">
                    <!-- contact form start -->
                    <form action="managecontact.php" class="row" data-parsley-validate="" method="post">
                        <!-- name -->
                        <div class="col-md-6">
                            <input type="text" name="u_name" class="form-control main" placeholder="Name" required>
                        </div>
                        <!-- email -->
                        <div class="col-md-6">
                            <input type="email" class="form-control main" placeholder="Email" name="email" required>
                        </div>
                        <!-- phone -->
                        <div class="col-md-12">
                            <input type="text" class="form-control main" placeholder="Phone" name="ph_no" required>
                        </div>
                        <!-- message -->
                        <div class="col-md-12">
                            <textarea name="message" rows="7" class="form-control main" placeholder="Your message" ></textarea>
                        </div>
                        <!-- submit button -->
                        <div class="col-md-12 text-right">
                            <button class="btn btn-style-one" type="submit" name="btn_contact">Send Message</button>
                        </div>
                    </form>
                    <!-- contact form end -->
                </div>
            </div>
        </div>
    </div>
    <!-- container end -->
</section>
<!--====  End of Contact Form  ====-->



<?php include("footer.php"); ?>