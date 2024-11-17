<?php
$Dir = "../";
include $Dir . "acm/AutoLoadRequirements.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo HOME_PAGE['keywords']; ?>">
    <meta name="description" content="<?php echo HOME_PAGE['description']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
    <?php include $Dir . 'include/HeaderFiles.php'; ?>
</head>

<body>

    <!-- page start -->
    <div class="page">

        <?php include $Dir . "include/MainHeader.php"; ?>

        <div class="prt-titlebar-wrapper prt-bg about-img" style="background-image: url('<?php echo STORAGE_URL;?>/images/pagetitle-bg-about.jpg');">
            <div class="prt-titlebar-wrapper-bg-layer prt-bg-layer"></div>
            <div class="prt-titlebar-wrapper-inner">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12">
                            <div class="prt-page-title-row-heading">
                                <div class="page-title-heading">
                                    <h2 class="title">Contact Us</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>Contact Us</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>

        <!--site-main start-->
        <div class="site-main">

            <!-- contact-us-iconbox-section -->
            <section class=" mb-5 pb-5 contact-us-iconbox-section clearfix">
                <div class="container-fliud mb-5">
                    <div class="row">
                        <div class="col-md-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3507.0159500264067!2d77.0802471146005!3d28.47906629776196!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1962244b3263%3A0xdf42599daca4e0d7!2sSTEPSMITH%20IMMIGRATION%20SERVICES%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1677776145697!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div><br>
                <div class="container mt-5">
                    <div class="row g-0 mt-5 prt-vertical_sep">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="featured-icon-box icon-align-top-content style19">
                                <div class="featured-icon">
                                    <div class="prt-icon">
                                        <i class="flaticon-phone-call"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>call us on</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <a href="tel:<?php echo APP_PHONE_NUMBERS['Sales'];?>"><?php echo APP_PHONE_NUMBERS['Sales'];?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="featured-icon-box icon-align-top-content style19">
                                <div class="featured-icon">
                                    <div class="prt-icon">
                                        <i class="flaticon-email"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Email</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <a href="mailto:<?php echo APP_EMAIL_ID['enquiry'];?>"><?php echo APP_EMAIL_ID['enquiry'];?></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="featured-icon-box icon-align-top-content style19">
                                <div class="featured-icon">
                                    <div class="prt-icon">
                                        <i class="flaticon-clock"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Opening hours</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <span>Mon-Sat: 10.00 AM to 06.00 PM</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="featured-icon-box icon-align-top-content style19">
                                <div class="featured-icon">
                                    <div class="prt-icon">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Address</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <span><?php echo APP_ADDRESS['Address']['Details'];?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-us-iconbox-section-end -->

           <!-- contact-form-section -->
            <section class="prt-row pb-5 mb-5 padding_bottom_zero-section contact-us-contact-form-section clearfix">
                <div class="container mb-5">
                    <div class="row g-0 mb-5">
                        <div class="col-lg-6">
                            <div class="col-bg-img-thirty-seven prt-bg prt-col-bgimage-yes col-bg-img-six">
                                <div class="prt-col-wrapper-bg-layer prt-bg-layer" style="background-image: url('<?php echo STORAGE_URL;?>/images/bg-image/col-bgimage-37.png');"></div>
                                <div class="layer-content"></div>                           
                            </div>
                            <img class="img-fluid prt-equal-height-image" src="<?php echo STORAGE_URL;?>/images/bg-image/col-bgimage-37.png" alt="col-bgimage-37">
                        </div>
                        <div class="col-lg-6">
                            <div class="bg-base-grey spacing-25">
                                <!-- section title -->
                                <div class="section-title style7">
                                    <div class="title-header">
                                        <h2 class="title">Have be any question? <br>feel free to <span>Contact</span></h2>
                                    </div>
                                </div><!-- section title end -->
                                <form action="<?php echo DOMAIN;?>/controller/ContactFormHandler.php" class="contact_form clearfix" method="post">
                                    <div class="row">
                                        <div class="col-md-12">                  
                                            <input name="name" type="text" value="" placeholder="Your Full Name" required="required">
                                        </div>

                                        <div class="col-md-12">
                                            <input name="email" type="text" value="" placeholder="Email Address" required="required">
                                        </div>
                                         <div class="col-md-12">
                                            <input name="phone" type="text" value="" placeholder="Phone Number" required="required">
                                        </div>
                                        <div class="col-md-12">
                                            <select id="selectbox" name="service">
                                                <option value="Visa Services">Visa Services</option>
                                                <option value="Visa Documentations">Visa Documentations</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12">
                                            <textarea name="message" rows="4" placeholder="Your Message" required="required"></textarea>
                                        </div>
                                        <div class="mt-5">
                                            <button class="submit prt-btn prt-btn-size-md prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor" name="sendform" type="submit" value="submit">Submit Here</button> 
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>                        
                    </div>
                </div>
            </section>
            <!-- contact-form-section-end -->
            


        </div><!-- site-main end-->
<br><br>

        <?php include $Dir . "include/MainFooter.php"; ?>

        <!-- back-to-top start -->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!-- back-to-top end -->

    </div><!-- page end -->

    <?php include $Dir . "include/FooterFiles.php"; ?>
</body>

</html>