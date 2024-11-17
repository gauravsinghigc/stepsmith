<?php
$Dir = "../../";
include $Dir . "acm/AutoLoadRequirements.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo HOME_PAGE['keywords']; ?>">
    <meta name="description" content="<?php echo HOME_PAGE['description']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>United State of America | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
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
                                    <h2 class="title">United State of America</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>United State of America</span>
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
                                                                <h3>United State of America</h3>
                                                            </div>
                                                            <div class="service-desc">
                                                               <p>America is the “country of opportunity,” where anyone can succeed if they put in enough effort. Success is honoured there, optimism is the way of life, and opportunity is a fact of life.</p>

<p>This is the first reason on our list for moving to America, and while it may be the most fantastical, it is also a very valid one. The Great American Dream is primarily a notion, but it is precisely this idea that has made America such a unique and desirable place to live.</p>
</div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="prt-bg prt-col-bgimage-yes col-bg-img-thirty-two z-index-2">
                                                        <div class="prt-col-wrapper-bg-layer prt-bg-layer" style="background-image: url('<?php echo STORAGE_URL;?>/app/USA-1024x683.jpg');"></div>
                                                        <div class="layer-content">
                                                        </div>
                                                    </div>
                                                    <img class="img-fluid prt-equal-height-image" src="<?php echo STORAGE_URL;?>/app/USA-1024x683.jpg" alt="bg-image-32">
                                                </div>

                                                <div class="col-lg-12">
                                                    <hr>
                                                   
<p>A U.S. visa, which is placed in the traveler’s passport, a travel document provided by the traveler’s country of citizenship, is typically required before a foreign national can enter the US.</p>
<p>If they satisfy the prerequisites for visa-free travel, some foreign visitors may be qualified to visit the United States without a visa. This website’s Visa section is devoted to information about U.S. visas for visitors from other countries.</p>
<p>You can proceed to a port of entry, airport, or land border crossing with a U.S. visa in hand and ask a Department of Homeland Security (DHS), Customs and Border Protection (CBP) inspector for permission to enter the country.</p>
<p>A visa does not ensure admittance into the United States, but it does show that a consular official at a U.S. Embassy or Consulate abroad has decided you are qualified to request entry for that particular reason. Travelers must be admitted to the United States for a specific status and duration by DHS/CBP inspectors, who act as the nation’s border watchmen. While you are in the country, DHS is also in charge of your immigration issues.</p>


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