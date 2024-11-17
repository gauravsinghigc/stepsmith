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
    <title>Manitoba | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
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
                                    <h2 class="title">Manitoba</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>Manitoba</span>
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
                                                   <h1>Manitoba</h1>
                                    <p> Located in one of Canada’s western prairie provinces, Manitoba is a province built on generations of rich agricultural production. Manitoba, home to the city of Winnipeg, borders Ontario to the east and Saskatchewan to the west.</p>

<p>The Manitoba Provincial Nominee Program (MPNP), a Provincial Nominee Program (PNP), is a collection of immigration pathways enabling foreign nationals to become Canadian permanent residents. The PNP is strategically designed to attract immigrants in areas which will benefit the province: skilled workers, workers in sectors with labour shortages, recent graduates, and agricultural entrepreneurs.</p>

<p>The province operates several immigration streams divided among four categories:
</p>
<h3>Skilled Workers in Manitoba (SWM)</h3>
<h3>Skilled Workers Overseas (SWO)</h3>
<h3>International Education Stream (IES)</h3>
<h3>Business Investor Stream (BIS)</h3>
<h3>Skilled Workers in Manitoba</h3>
<p>Skilled Workers in Manitoba encompasses three immigration streams designed to target workers who have already gained employment experience or offers of employment in Manitoba. Candidates for this stream must be currently working and living in Manitoba at the time of their application, or, in certain cases, they may be invited to apply after attending a recruitment session with MPNP overseas.</p>

<ul>
  <li>Skilled Workers in Manitoba Stream</li>
  <li>Manitoba Experience Pathway – Coming soon</li>
  <li>Employer Direct Recruitment Pathway – Coming soon</li>
</ul>
<h3>Skilled Workers Overseas</h3>
<p>Skilled Workers Overseas encompasses three immigration streams designed to target skilled workers who have the ability to join Manitoba’s work force and adapt easily to life in the province. All streams of this category prioritize workers who have experience in Manitoba’s In-Demand Occupations.</p>

<ul>
  <li>Manitoba Skilled Workers Overseas Stream</li>
  <li>Manitoba Express Entry Pathway</li>
  <li>Manitoba Human Capital Pathway – Coming soon</li>
</ul>
<h3>International Education Stream</h3>
<p>The International Education Stream (IES) targets recent graduates from designated post-secondary institutions located in the province of Manitoba. Candidates for this category must have some amount of work experience or business management experience from the province, either completed after graduation or during their program of study as part of an internship or co-op. There are three pathways within this stream:</p>

<ul>
  <li>Manitoba Career Employment Pathway</li>
  <li>Manitoba Graduate Internship Pathway</li>
  <li>Manitoba Student Entrepreneur Pathway</li>
</ul>
<h3>Business Investor Stream</h3>
<p>Manitoba’s Business Investor Stream (BIS) is a collection of two immigration streams designed for individuals with business management experience who wish to launch a new business endeavour in Manitoba. The entrepreneurial stream is for general entrepreneurs with business proposals in a range of sectors, while the farm investor stream is designed specifically for entrepreneurs in the farming sector.</p>

<ul>
  <li>Manitoba Entrepreneur Pathway</li>
  <li>Manitoba Farm Investor Pathway</li>
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