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
    <title>Study Visa | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
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
                                    <h2 class="title">Study Visa</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>Study Visa</span>
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
                                                                <h3>Study Visa</h3>
                                                            </div>
                                                            <div class="service-desc">
                                                               <p>You might become perplexed by words like SDS and Non-SDS during the visa application process if you intend to study in Canada. SDS, short for Student Direct Stream, was formerly known as the Students Partner Program and is accessible to some nations, including Brazil, India, and others. It is possible to apply for a non-SDS visa in general to temporarily remain in Canada for the purposes of immigration, work, or study. No matter where they are from, all international travellers are welcome. We’ll talk about the distinction between SDS and Non-SDS in this blog.</p>
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

                                                <div class="col-lg-12">
                                                    <hr>
                                                    <h4>Document Checklist for Visa Application:</h4>
                                                    <ul>
<li>Official academic transcripts, including the 12th mark sheet. Candidates must have scored at least 55% aggregate marks for undergraduate courses.</li>
<li>Undergraduate degree or advanced diploma. Applicants must have a minimum of 50% or above to pursue postgraduate courses.</li>
<li>Statement of Purpose (SOP)</li>
<li>English proficiency test scores with IELTS of minimum 6.0 for UG and an overall band of 6.5 for PG.</li>
<li>Offer letters from the colleges falling under SDS.</li>
<li>Guaranteed Investment Certificate (GIC) of $10,000 to cover the cost of living.</li>
<li>Digital Photographs</li>
<li>Proof of previous work experience</li>
<li>Receipt of tuition fees</li>
<li>Proof of necessary medical tests</li>
<li>Visa application fees of $150</li>
</ul>



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