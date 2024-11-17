<?php
$Dir = "../../../";
include $Dir . "acm/AutoLoadRequirements.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo HOME_PAGE['keywords']; ?>">
    <meta name="description" content="<?php echo HOME_PAGE['description']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>British Columbia | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
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
                                    <h2 class="title">British Columbia</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>British Columbia</span>
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
                                                <div class="col-lg-12">
                                                   <h1>British Columbia</h1>
                                     <p>Located on Canada’s west coast, British Columbia is known for the unparalleled natural beauty of the Rocky Mountains and the Pacific Ocean. Economic growth and labor demand have made the province one of Canada’s top immigration destinations.</p>
<p>The British Columbia Provincial Nominee Program (BC PNP), a Provincial Nominee Program (PNP), is a collection of immigration pathways enabling foreign nationals to become Canadian permanent residents in BC. The PNP is strategically designed to attract immigrants in areas which will benefit the province: skilled workers, workers in sectors with labour shortages, entrepreneurs, and investors. The province operates several immigration streams divided among two categories:</p>
<ul>
    <li>British Columbia Skills Immigration</li>
    <li>British Columbia Entrepreneur Immigration</li>
</ul>
<h3>BC Skills Immigration</h3>
<p>British Columbia Skills Immigration is for foreigners with the skills needed to become a significant part of British Columbia’s workforce. Pathways within BC Skills Immigration focus on immigrants who are job prospects in BC and demonstrate the experience necessary to secure and maintain employment as a BC resident. Mainly there are 2 types of programs:</p>
<ul>
    <li>British Columbia Express Entry</li>
    <li>BC Provincial Nominee Program (Non-Express Entry)</li>
</ul>
<p>Candidates are not required to be eligible for Express Entry to apply to the BC Skills Immigration streams. However, most of the programs contained within BC Skills Immigration offer an accelerated pathway to permanent residence for eligible candidates who have an active Express Entry profile. Refer to the application procedure of each stream to determine whether it offers an Express Entry pathway.</p>
<h3>BC Entrepreneur Immigration</h3>
<p>British Columbia Entrepreneur Immigration targets foreign nationals and foreign companies who have demonstrated track records of success in business ownership, management, and investment. Individual entrepreneurs with significant personal net worth and international corporations with high annual revenues may immigrate to BC through the establishment of new enterprises in the province.</p>










             

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