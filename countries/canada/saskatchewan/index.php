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
    <title>Saskatchewan | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
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
                                    <h2 class="title">Saskatchewan</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>Saskatchewan</span>
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
                                                   <h1>Saskatchewan</h1>
                                     <p> Located in Western Canada’s prairie region, the province of Saskatchewan is one of the hubs of agricultural production in Canada. Rich in farmlands, the province hosts two major Canadian cities, Regina and Saskatoon.</p>

<p>The Saskatchewan Immigrant Nominee Program (SINP), a Provincial Nominee Program (PNP), is a collection of immigration pathways enabling foreign nationals to become Canadian permanent residents. The PNP is strategically designed to attract immigrants in areas which will benefit the province: skilled workers, workers in sectors with labour shortages, workers with job offers, and entrepreneurs. The province operates several immigration streams divided among three categories:</p>

<h5>Saskatchewan International Skilled Worker</h5>
Saskatchewan International Skilled Worker encompasses three immigration streams designed to target skilled workers who have the ability to join Saskatchewan’s work force and adapt easily to life in the province. Some streams prioritize workers who have experience in sectors experiencing labour shortages, while other streams target workers with employment offers from Saskatchewan employers.
<ul>
    <li>Saskatchewan Express Entry</li>
    <li>Saskatchewan Employment Offer</li>
    <li>Saskatchewan In-Demand Occupation</li>
</ul>
<h5>Saskatchewan Experience</h5>
Saskatchewan Experience encompasses five immigration streams designed to target workers who have already gained employment experience in Saskatchewan. As well, workers in these streams must have an offer of employment from a Saskatchewan employer to continue working in the province. Certain streams prioritize workers with experience in certain sectors which are experiencing labour shortages in the province.
<ul>
    <li>Saskatchewan Existing Work Permit</li>
    <li>Saskatchewan Health Professionals</li>
    <li>Saskatchewan Hospitality Sector Project</li>
    <li>Saskatchewan Long-Haul Truck Driver Project</li>
    <li>Saskatchewan Students</li>
</ul>
<h5>Saskatchewan Entrepreneur and Farm</h5>
Saskatchewan Entrepreneur and Farm is a collection of two immigration streams designed for individuals with business management experience who wish to launch a new business endeavour in Saskatchewan. The entrepreneurial stream is for general entrepreneurs with business proposals in a range of sectors, while the farm owner and operator stream is designed specifically for entrepreneurs in the farming sector.
<ul>
    <li>Saskatchewan Entrepreneur</li>
    <li>Saskatchewan Farm Owners and Operators</li>
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