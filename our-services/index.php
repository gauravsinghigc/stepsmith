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
    <title>Our Services | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
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
                                    <h2 class="title">Our Services</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>Our Services</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>

        <!--site-main start-->
        <div class="site-main">

           <!-- country-first-section -->
            <section class="prt-row country01-first-section bg-base-grey clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            
                            <div class="bg-base-white border border-top-0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="bg-base-white spacing-22">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="spacing-20">
                                                        <div class="service-title">
                                                            <div class="service-header">
                                                                <h3>Our Services</h3>
                                                            </div>
                                                            <div class="service-desc">
                                                         
<p>Pre-Landing Services:</p>
<ul>
  <li>On call Consultation ✅</li>
  <li>Documents Preparation ✅</li>
  <li>Eligibility Evaluation – Form ✅</li>
  <li>Providing job assistance ✅</li>
  <li>Resume Writing ✅</li>
  <li>Preparing cover letter, SOP, Intent letter ✅</li>
  <li>Education assessment ✅</li>
  <li>Skill assessment ✅</li>
  <li>Exam Preparation ✅</li>
  <li>Visa filing ✅</li>
  <li>Assisting with other prelanding services such as- forex currency exchange, flight ticket and others. ✅</li>
</ul>
<p>Post-Landing Services:</p>
<ul>
  <li>Airport Pickup ✔</li>
  <li>Accommodation Assistance ✔</li>
  <li>Bank Account Opening ✔</li>
  <li>Documents checklist required at the Airport ✔</li>
  <li>PR Card assistance ✔</li>
  <li>Social insurance number (SIN) ✔</li>
  <li>Driving license assistance ✔</li>
  <li>Health card assistance ✔</li>
</ul>


</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="prt-bg prt-col-bgimage-yes col-bg-img-thirty-two z-index-2">
                                                        <div class="prt-col-wrapper-bg-layer prt-bg-layer" style="background-image: url('<?php echo STORAGE_URL;?>/images/bg-image/col-bgimage-32.png');"></div>
                                                        <div class="layer-content">
                                                        </div>
                                                    </div>
                                                    <img class="img-fluid prt-equal-height-image" src="<?php echo STORAGE_URL;?>/images/bg-image/col-bgimage-32.png" alt="bg-image-32">
                                                </div>

                                              
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- country-first-section-end -->

        </div><!-- site-main end-->


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