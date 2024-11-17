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
    <title>Ontario | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
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
                                    <h2 class="title">Ontario</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>Ontario</span>
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
                                                   <h1>Ontario</h1>
                                      <p>Located in central Canada, the province of Ontario is the most popular destination for new immigrants to Canada. The province hosts the city of Toronto, Canada’s economic hub, as well as the nation’s capital city, Ottawa.</p>
<p>The Ontario Immigrant Nominee Program (OINP), a Provincial Nominee Program (PNP), is a collection of immigration pathways enabling foreign nationals to become Canadian permanent residents. The PNP is strategically designed to attract immigrants in areas which will benefit the province: skilled workers, workers in sectors with labour shortages, entrepreneurs, and investors. The province operates several immigration streams divided among three categories:</p>
<h2>Ontario Human Capital</h2>
<p>Ontario Human Capital encompasses a range of immigration streams targeting candidates for Ontario’s labour force. The Human Capital streams emphasize skills, abilities, or experience which suggest a foreign national can easily join the Ontario labour force. Those who have work or educational experience in Ontario, those who are proficient in both English and French, and those with competitive Express Entry profiles may find success through one of these streams.</p>
<ul>
<li>Human Capital Priorities – Express Entry</li>
<li>French-Speaking Skilled Worker – Express Entry</li>
<li>Skilled Trades – Express Entry</li>
<li>Masters Graduate</li>
<li>PhD Graduate</li>
</ul>
<h2>Ontario Employer Job Offer</h2>
<p>Ontario Employer Job Offer streams provide immigration options for applicants who have a valid job offer from an Ontario employer. Both the employer and the job itself must meet certain conditions in order to be considered valid. As well, the applicant must meet certain eligibility requirements depending on which stream they wish to apply through.</p>
<ul>
<li>Foreign Worker</li>
<li>International Student with a Job Offer</li>
<li>In-Demand Skills</li>
</ul>
<h2>Ontario Entrepreneur</h2>
<p>Ontario’s Entrepreneur Stream is designed to target wealthy entrepreneurs who are interested in making significant investments in business development in Ontario. Through this program, entrepreneurs with proven track records of success can launch new business projects in Ontario. If these projects are successful, the applicants involved will be nominated for Canadian permanent residence.</p>




             

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