<?php
$Dir = "";
include $Dir . "acm/AutoLoadRequirements.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="<?php echo HOME_PAGE['keywords']; ?>">
    <meta name="description" content="<?php echo HOME_PAGE['description']; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
    <?php include $Dir . 'include/HeaderFiles.php'; ?>
    <?php if(isset($_GET['msg'])){
        if($_GET['msg'] == 1){
            ?>
<script>alert("We have received details! Contact you soon as possible!")</script>
            <?php
        } else {
            ?>
<script>alert("Sorry! something went wrong!")</script>
            <?php
        }
    } ?>
</head>

<body>

    <!-- page start -->
    <div class="page">

        <?php include $Dir . "include/MainHeader.php"; ?>

        <div class="prt-rev_slider-wide">
            <!-- START homemainclassicslider REVOLUTION SLIDER 6.1.8 -->
            <rs-module-wrap id="rev_slider_1_1_wrapper" data-alias="classic-mainslider" data-source="gallery">

                <rs-module id="rev_slider_1_1" style="display:none;" data-version="6.1.8">

                    <rs-slides>

                        <rs-slide data-key="rs-1" data-title="Slide" data-thumb="<?php echo STORAGE_URL; ?>/images/slides/sliderbg-001.jpg" data-anim="ei:d;eo:d;s:d;r:0;t:grayscalecross;sl:d;">

                            <img src="<?php echo STORAGE_URL; ?>/images/slides/sliderbg-001.jpg" alt="image" title="slider-bg001" width="1920" height="600" class="rev-slidebg" data-no-retina>

                            <rs-layer id="slider-1-slide-1-layer-0" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:17px,17px,0,0;y:t,t,t,m;yo:240px,240px,180px,-5px;" data-text="w:normal;s:80,80,65,42;l:110,110,85,52;fw:500;" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:330;sp:800;sR:330;" data-frame_999="o:0;st:w;sR:7870;" style="z-index:11;font-family:'Poppins';">and get PR Visas
                            </rs-layer>

                            <rs-layer id="slider-1-slide-1-layer-1" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:18px,18px,0,0;yo:139px,139px,104px,74px;" data-text="w:normal;s:80,80,65,42;l:110,110,80,52;fw:500;" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:230;sp:800;sR:230;" data-frame_999="o:0;st:w;sR:7970;" style="z-index:10;font-family:'Poppins';">Settle In <span class="text-base-skin slide-text">Abroad</span>
                            </rs-layer>

                            <rs-layer id="slider-1-slide-1-layer-2" data-type="text" data-rsp_ch="on" data-xy="x:l,l,c,c;xo:25px,25px,0,519px;yo:111px,111px,73px,27px;" data-text="w:normal;s:19,19,15,14;l:30,30,25,45;fw:500;" data-vbility="t,t,t,f" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:80;sp:600;sR:80;" data-frame_999="o:0;st:w;sR:8320;" style="z-index:9;font-family:'Poppins';">Grab the <span class="text-base-skin slide-text">Golden Opportunity</span> to
                            </rs-layer>

                            <rs-layer id="slider-1-slide-1-layer-3" data-type="shape" data-rsp_ch="on" data-xy="xo:50px,50px,0,0;yo:50px,50px,0,0;" data-text="w:normal;s:20,20,11,6;l:0,0,14,8;" data-dim="w:300px,300px,100%,100%;h:180px,180px,100%,100%;" data-vbility="f,f,t,t" data-frame_999="o:0;st:w;" style="z-index:8;background-color:rgba(0,58,102,0.6);">
                            </rs-layer>

                            <a id="slider-1-slide-1-layer-4" class="rs-layer rev-btn" href="<?php echo DOMAIN; ?>/evaluation-form/" target="_self" data-type="text" data-rsp_ch="on" data-xy="x:c;xo:-554px,-554px,0,0;y:m;yo:157px,157px,125px,59px;" data-text="w:normal;s:14,14,14,13;l:25,25,18,13;fw:600;" data-padding="t:8,8,10,11;r:30,30,30,25;b:8,8,10,11;l:30,30,30,25;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:50px,50px,50px,50px;" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:1060;sp:500;sR:1060;" data-frame_999="o:0;st:w;sR:7440;" data-frame_hover="c:#fff;bgc:#e02454;boc:#e02454;bor:50px,50px,50px,50px;bos:solid;bow:2px,2px,2px,2px;e:default;" style="z-index:16;font-family:'Poppins';"> Send Assessment Form
                            </a>

                            <rs-layer id="slider-1-slide-1-layer-9" data-type="text" data-color="#e23861" data-rsp_ch="on" data-xy="x:c;xo:-406px,-406px,597px,368px;y:m;yo:156px,156px,83px,51px;" data-text="w:normal;s:50,50,28,17;l:35,35,19,11;" data-vbility="t,t,f,f" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:1270;sp:400;sR:1270;" data-frame_999="o:0;st:w;sR:7330;" style="z-index:17;font-family:'Roboto';"><i class="flaticon-customer-service"></i>
                            </rs-layer>

                            <rs-layer id="slider-1-slide-1-layer-10" data-type="text" data-rsp_ch="on" data-xy="x:c;xo:-340px,-340px,0,350px;y:m;yo:141px,141px,51px,20px;" data-text="w:normal;s:15,15,15,13;l:25,25,20,12;" data-frame_0="y:100%;" data-frame_1="x:1px,1px,0px,0px;e:power4.inOut;st:1390;sR:1390;" data-frame_999="o:0;st:w;sR:7310;" style="z-index:18;font-family:'Poppins';">Call us
                            </rs-layer>

                            <rs-layer id="slider-1-slide-1-layer-11" data-type="text" data-rsp_ch="on" data-xy="x:c;xo:-290px,-290px,0,350px;y:m;yo:167px,167px,77px,41px;" data-text="w:normal;s:20,20,17,15;l:30,30,20,14;fw:500;" data-frame_0="y:100%;" data-frame_1="e:power4.inOut;st:1400;sR:1400;" data-frame_999="o:0;st:w;sR:7300;" style="z-index:19;font-family:'Poppins';">
                                <a href="tel:<?php echo APP_PHONE_NUMBERS['Sales']; ?>" class='text-white'><?php echo APP_PHONE_NUMBERS['Sales']; ?></a>
                            </rs-layer>
                        </rs-slide>

                    </rs-slides>

                    <rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
                </rs-module>

            </rs-module-wrap>
            <!-- END REVOLUTION SLIDER -->

        </div>
        <!-- END REVOLUTION SLIDER -->

        <!-- site-main start -->
        <div class="site-main">

            <!--about-section-->
            <section class="prt-row home01-welcome-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6 col-lg-12" data-aos="fade-right">
                            <div class="position-relative text-center text-sm-start">
                                <div class="prt_single_image-wrapper">
                                    <img class="img-fluid" src="<?php echo STORAGE_URL; ?>/images/single-img-1.png" alt="single-img-06">
                                </div>
                                <div class="prt-single-img-1" data-aos="slide-right" data-aos-offset="500" data-aos-duration="500">
                                    <div class="prt_single_image-wrapper">
                                        <img class="img-fluid" src="<?php echo STORAGE_URL; ?>/images/single-img-2.png" alt="single-img-06">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-12" data-aos="fade-left">
                            <div class="mt-30">
                                <!--section-title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>WELCOME TO <?php echo APP_INFO['APP_NAME']; ?></h3>
                                        <h2 class="title">Welcome to <span><?php echo APP_INFO['APP_SHORT_NAME']; ?></span></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p><?php echo APP_INFO['APP_NAME']; ?> was established with a small idea that was incepted in the minds of its promoters in the year 2019! We skilfully guide applicants for immigration process to any country they aspire to settle down.</p>
                                    </div>
                                </div><!--section-title-end -->
                                <div class="row pt-10 res-991-pt-0">
                                    <div class="col-lg-8 col-md-8 col-sm-12 align-self-center">
                                        <ul class="prt-list style1">
                                            <li>
                                                <i class="fa fa-check"></i>
                                                <span class="prt-list-li-content">The desire to blur the global boundaries fulfil</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-check"></i>
                                                <span class="prt-list-li-content">Certified legal advisors to serve you better way.</span>
                                            </li>
                                            <li>
                                                <i class="fa fa-check"></i>
                                                <span class="prt-list-li-content">Easy approval by choosing top visa consultant</span>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-12 align-self-center">
                                        <div class="prt-play-icon-btn style1 text-center">
                                            <a href="https://youtu.be/Adk6gQKrT5g" target="_self" class="prt_prettyphoto">
                                                <i class="fa fa-play text-base-skin"></i>
                                            </a>
                                            <h3>Watch The <br> Video</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!--about-section end-->

            <!--services-section-->
            <section class="prt-row home01-services-section bg-img1 bg-base-grey prt-bg prt-bgimage-yes clearfix">
                <div class="prt-row-wrapper-bg-layer prt-bg-layer"></div>
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-10 m-auto">
                            <!--section-title-->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3>OUR VISA CATEGORIES</h3>
                                    <h2 class="title">We provide experts great <br>visa <span>Categories</span></h2>
                                </div>
                            </div><!--section-title end-->
                        </div>
                    </div>
                    <div class="row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 2}} , {"breakpoint":991,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
                        <div class="col-lg-6">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-services style1">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="<?php echo STORAGE_URL; ?>/images/services/services-1-896x590.png" alt="blog_img">
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-details-wrap">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="<?php echo DOMAIN; ?>/visa-categories/job-seekar-visa" tabindex="0">Job Seeker Visa</a></h3>
                                        </div>
                                    </div>
                                    <div class="featured-explore-more">
                                        <a href="<?php echo DOMAIN; ?>/visa-categories/job-seekar-visa">explore more</a>
                                    </div>
                                </div>
                                <div class="services-details-wrap">
                                    <div class="services-details-box">
                                        <div class="services-content">
                                            <div class="services-title">
                                                <h3><a href="<?php echo DOMAIN; ?>/visa-categories/job-seekar-visa" tabindex="0">Job Seeker Visa</a></h3>
                                            </div>
                                            <div class="services-desc">
                                                <p>Visa that grants the holder authorization to accept work employment in a foreign countries…</p>
                                            </div>
                                        </div>
                                        <div class="services-explore-more">
                                            <a href="<?php echo DOMAIN; ?>/visa-categories/job-seekar-visa">explore more</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>


                        <div class="col-lg-6">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-services style1">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="<?php echo STORAGE_URL; ?>/images/services/services-4-896x590.png" alt="blog_img">
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-details-wrap">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="<?php echo DOMAIN; ?>/visa-categories/work-visa" tabindex="0">Worker Visa</a></h3>
                                        </div>
                                    </div>
                                    <div class="featured-explore-more">
                                        <a href="<?php echo DOMAIN; ?>/visa-categories/work-visa">explore more</a>
                                    </div>
                                </div>
                                <div class="services-details-wrap">
                                    <div class="services-details-box">
                                        <div class="services-content">
                                            <div class="services-title">
                                                <h3><a href="<?php echo DOMAIN; ?>/visa-categories/work-visa" tabindex="0">Worker Visa</a></h3>
                                            </div>
                                            <div class="services-desc">
                                                <p>Generally intended for individuals entering a country for the purposes of conducting business…</p>
                                            </div>
                                        </div>
                                        <div class="services-explore-more">
                                            <a href="<?php echo DOMAIN; ?>/visa-categories/work-visa">explore more</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>

                        <div class="col-lg-6">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-services style1">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="<?php echo STORAGE_URL; ?>/images/services/services-6-896x590.png" alt="blog_img">
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-details-wrap">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="<?php echo DOMAIN; ?>/visa-categories/study-visa" tabindex="0">Student Visas</a></h3>
                                        </div>
                                    </div>
                                    <div class="featured-explore-more">
                                        <a href="<?php echo DOMAIN; ?>/visa-categories/study-visa">explore more</a>
                                    </div>
                                </div>
                                <div class="services-details-wrap">
                                    <div class="services-details-box">
                                        <div class="services-content">
                                            <div class="services-title">
                                                <h3><a href="<?php echo DOMAIN; ?>/visa-categories/study-visa" tabindex="0">Student Visas</a></h3>
                                            </div>
                                            <div class="services-desc">
                                                <p>Generally intended for individuals entering a country for the purposes of conducting business…</p>
                                            </div>
                                        </div>
                                        <div class="services-explore-more">
                                            <a href="<?php echo DOMAIN; ?>/visa-categories/study-visa">explore more</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>

                        <div class="col-lg-6">
                            <!-- featured-imagebox-post -->
                            <div class="featured-imagebox featured-imagebox-services style1">
                                <!-- featured-thumbnail -->
                                <div class="featured-thumbnail">
                                    <img class="img-fluid" src="<?php echo STORAGE_URL; ?>/images/services/services-3-896x590.png" alt="blog_img">
                                </div><!-- featured-thumbnail end-->
                                <div class="featured-details-wrap">
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="<?php echo DOMAIN; ?>/visa-categories/tourist-visa" tabindex="0">Tourist Visas</a></h3>
                                        </div>
                                    </div>
                                    <div class="featured-explore-more">
                                        <a href="<?php echo DOMAIN; ?>/visa-categories/study-visa">explore more</a>
                                    </div>
                                </div>
                                <div class="services-details-wrap">
                                    <div class="services-details-box">
                                        <div class="services-content">
                                            <div class="services-title">
                                                <h3><a href="<?php echo DOMAIN; ?>/visa-categories/tourist-visa" tabindex="0">Tourist Visas</a></h3>
                                            </div>
                                            <div class="services-desc">
                                                <p>A tourist visa is a temporary authorization granted to foreign nationals who wish to travel to another country for the purpose of leisure, vacation, or other non-business related activities.</p>
                                            </div>
                                        </div>
                                        <div class="services-explore-more">
                                            <a href="<?php echo DOMAIN; ?>/visa-categories/tourist-visa">explore more</a>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox-post end -->
                        </div>
                    </div>
                </div>
            </section>
            <!--services-section end-->

            <!-- broken-section -->
            <section class="prt-row padding_zero-section broken-section bg-layer-equal-height clearfix">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-6">
                            <!-- col-img-img-two -->
                            <div class="col-bg-img-one prt-bg prt-col-bgimage-yes prt-left-span z-index-2">
                                <div class="prt-col-wrapper-bg-layer prt-bg-layer" style="background-image: url('<?php echo STORAGE_URL; ?>/images/bg-image/col-bgimage-1.png');"></div>
                                <div class="layer-content position-relative">
                                    <div class="row">
                                        <div class="col-xl-7 col-lg-12"></div>
                                        <div class="col-xl-5 col-lg-12 res-991-pl-0 res-991-pr-0">
                                            <div class="services-info-fid">
                                                <div class="prt-fid inside style1 bg-base-skin">
                                                    <div class="prt-fid-contents text-base-white">
                                                        <h4 class="prt-fid-inner">
                                                            <span data-appear-animation="animateDigits" data-from="0" data-to="852" data-interval="50" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">852
                                                            </span>
                                                        </h4>
                                                        <h3 class="prt-fid-title">Visa Granted</h3>
                                                    </div>
                                                </div>
                                                <div class="prt-fid inside style1 bg-base-skin">
                                                    <div class="prt-fid-contents text-base-white">
                                                        <h4 class="prt-fid-inner">
                                                            <span data-appear-animation="animateDigits" data-from="0" data-to="900" data-interval="100" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">900
                                                            </span>
                                                        </h4>
                                                        <h3 class="prt-fid-title">Gave Sigange Advice</h3>
                                                    </div>
                                                </div>
                                                <div class="prt-fid inside style1 bg-base-skin">
                                                    <div class="prt-fid-contents text-base-white">
                                                        <h4 class="prt-fid-inner">
                                                            <span data-appear-animation="animateDigits" data-from="0" data-to="630" data-interval="50" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">8630
                                                            </span>
                                                        </h4>
                                                        <h3 class="prt-fid-title">Clients Are Satisfied</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- row end -->
                        </div>
                        <div class="col-lg-6">
                            <!-- col-img-img-two -->
                            <div class="prt-bg prt-col-bgcolor-yes bg-base-dark prt-right-span spacing-1">
                                <div class="prt-col-wrapper-bg-layer prt-bg-layer"></div>
                                <div class="layer-content">
                                    <!-- section title -->
                                    <div class="section-title style2">
                                        <div class="title-header">
                                            <h3>What we do</h3>
                                            <h2 class="title">Immigration services <br>from <span> Experienced</span> agents</h2>
                                        </div>
                                    </div><!-- section title end -->
                                    <div class="pt-5">
                                        <h3>Study and work visa consultant</h3>
                                        <p>Skilled professionals are always ready to provide reliable services to our clients!. We guide the applicants for their immigration.</p>
                                        <div class="prt-horizontal_sep mt-30 mb-30"></div>
                                        <h3>Online visa services and guidance</h3>
                                        <p>You can directly contact us through filling up the form. Our team will get back to you with your visa enquiry and help you for visa services.</p>
                                    </div>
                                </div>
                            </div><!-- row end -->
                        </div>
                    </div>
                </div>
            </section>
            <!-- broken-section-end -->

            <!-- immigration-and-services-section -->
            <section class="prt-row home01-immigration-and-services-section clearfix">
                <div class="container" data-aos="fade-up">
                    <div class="row">
                        <div class="col-lg-8 col-md-8 col-sm-10 m-auto">
                            <!--section-title-->
                            <div class="section-title title-style-center_text">
                                <div class="title-header">
                                    <h3>COUNTRIES WE OFFER</h3>
                                    <h2 class="title">Immigration & visa services <br>following <span> Countries</span></h2>
                                </div>
                            </div><!--section-title end-->
                        </div>
                    </div>
                    <div class="row mt_15">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <div class="featured-imagebox-wrapper">
                                    <div class="featured-thumbnail">
                                        <img width="656" height="484" class="img-fluid" src="<?php echo STORAGE_URL; ?>/images/portfolio/05.jpg" alt="image">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="<?php echo DOMAIN; ?>/countries/canada">Canada</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <div class="featured-imagebox-wrapper">
                                    <div class="featured-thumbnail">
                                        <img width="656" height="484" class="img-fluid" src="<?php echo STORAGE_URL; ?>/images/portfolio/06.jpg" alt="image">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="<?php echo DOMAIN; ?>/countries/germany">Germany</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <div class="featured-imagebox-wrapper">
                                    <div class="featured-thumbnail">
                                        <img width="656" height="484" class="img-fluid" src="<?php echo STORAGE_URL; ?>/images/portfolio/07.jpg" alt="image">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="<?php echo DOMAIN; ?>/countries/united-state-of-america">USA</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- featured-imagebox -->
                            <div class="featured-imagebox featured-imagebox-portfolio style1">
                                <div class="featured-imagebox-wrapper">
                                    <div class="featured-thumbnail">
                                        <img width="656" height="484" class="img-fluid" src="<?php echo STORAGE_URL; ?>/images/portfolio/08.png" alt="image">
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h3><a href="<?php echo DOMAIN; ?>/countries/australia">Australia</a></h3>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- featured-imagebox end-->
                        </div>
                    </div>
                </div>
            </section>
            <!-- immigration-and-services-section-end -->

            <!-- testimonial-section -->
            <section class="prt-row padding_zero-section home01-testimonial-section clearfix">
                <div class="container">
                    <div class="row g-0">
                        <div class="col-lg-6 mb_80 res-991-mb-0">
                            <div class="prt-bg prt-col-bgimage-yes prt-col-bgcolor-yes prt-left-span bg-base-dark spacing-2">
                                <div class="prt-col-wrapper-bg-layer prt-bg-layer">
                                    <div class="prt-col-wrapper-bg-layer-inner"></div>
                                </div>
                                <div class="layer-content">
                                    <!-- section title -->
                                    <div class="section-title style2">
                                        <div class="title-header">
                                            <h3>TESTIMONIALS</h3>
                                            <h2 class="title">Feedback from our <span class="text-base-skin"> Clients</span></h2>
                                        </div>
                                    </div><!-- section title end -->
                                    <div class="row vertical_slider testimonial-vertical" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":false, "infinite":true, "responsive": [{"breakpoint":1024,"settings":{"slidesToShow": 3}}, {"breakpoint":992,"settings":{"slidesToShow": 1}}, {"breakpoint":768,"settings":{"slidesToShow": 1}}, {"breakpoint":576,"settings":{"slidesToShow": 1}}]}'>
                                        <div class="col-lg-12">
                                            <!-- testimonials -->
                                            <div class="testimonials style1">
                                                <div class="testimonial-content">
                                                    <blockquote class="testimonial-text">Thank you Stepsmith Immigration for your excellent support. The entire team is helpful and puts in 100% efforts in delivering what they commit. Very patiently they answered all my questions and concerns at any hour. If anyone is looking for a great immigration services, Stepsmith Immigration is highly recommended!
Kudos to the team for the good work and helping others out.</blockquote>
                                                    <div class="star-ratings prt-section-wrapper-cell">
                                                        <div class="star-ratings">
                                                            <ul class="rating">
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-bottom">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-fluid" src="<?php echo STORAGE_URL; ?>/lib/female.png" alt="testimonial-img" width="60" height="60">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h3>Rashmi Tanwar</h3>
                                                    </div>
                                                </div>
                                            </div>
                                        </div><!-- testimonials end -->
                                        <div class="col-lg-12">
                                            <!-- testimonials -->
                                            <div class="testimonials style1">
                                                <div class="testimonial-content">
                                                    <blockquote class="testimonial-text">Very Professional service from a genuine and expert Migration agent. Stepsmith immigration team is dedicated and committed to help clients as they did with my friends complex visa case. Thank you Stepsmith team, keep up the great job. I recommend him & his team for best Visa advice.</blockquote>
                                                    <div class="star-ratings prt-section-wrapper-cell">
                                                        <div class="star-ratings">
                                                            <ul class="rating">
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-bottom">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-fluid" src="<?php echo STORAGE_URL; ?>/lib/female.png" alt="testimonial-img" width="60" height="60">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h3>Anchal Bamnia</h3>
                                                    </div>
                                                </div>
                                            </div><!-- testimonials end -->
                                        </div>
                                        <div class="col-lg-12">
                                            <!-- testimonials -->
                                            <div class="testimonials style1">
                                                <div class="testimonial-content">
                                                    <blockquote class="testimonial-text">One of the best consultants if you want your entire procedure to be smooth and accurate. I had given up hope after many refusal and then I came to Stepsmith for help. They helped me get a student visa and guided me at every step. Their consultants actually know what they're doing and are a hundred percent honest with you during the process.</blockquote>
                                                    <div class="star-ratings prt-section-wrapper-cell">
                                                        <div class="star-ratings">
                                                            <ul class="rating">
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-bottom">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-fluid" src="<?php echo STORAGE_URL; ?>/lib/female.png" alt="testimonial-img" width="60" height="60">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h3>Vanshika Abroal</h3>
                                                    </div>
                                                </div>
                                            </div><!-- testimonials end -->
                                        </div>

                                         <div class="col-lg-12">
                                            <!-- testimonials -->
                                            <div class="testimonials style1">
                                                <div class="testimonial-content">
                                                    <blockquote class="testimonial-text">I have been planning to go to Canada for a better future.I have now my Pr visa, this company figure me out and give good guidance</blockquote>
                                                    <div class="star-ratings prt-section-wrapper-cell">
                                                        <div class="star-ratings">
                                                            <ul class="rating">
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                                <li class="active"><i class="fa fa-star"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testimonial-bottom">
                                                    <div class="testimonial-avatar">
                                                        <div class="testimonial-img">
                                                            <img class="img-fluid" src="<?php echo STORAGE_URL; ?>/lib/male.png" alt="testimonial-img" width="60" height="60">
                                                        </div>
                                                    </div>
                                                    <div class="testimonial-caption">
                                                        <h3>MR MANISH</h3>
                                                    </div>
                                                </div>
                                            </div><!-- testimonials end -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="prt-bg prt-col-bgimage-yes prt-right-span col-bg-img-two">
                                <div class="prt-col-wrapper-bg-layer prt-bg-layer" style="background-image: url('<?php echo STORAGE_URL; ?>/images/bg-image/col-bgimage-2.png');"></div>
                                <div class="layer-content"></div>
                            </div>
                            <img class="img-fluid prt-equal-height-image" src="<?php echo STORAGE_URL; ?>/images/bg-image/col-bgimage-2.png" alt="col-bgimage-6.png">
                        </div>
                    </div>
                </div>
            </section>
            <!-- testimonial-section-end -->

            <!--fid-section-->
            <section class="prt-row home01-fid-section bg-base-skin clearfix">
                <div class="container-fliud">
                    <div class="row spacing-13 prt-vertical_sep">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- prt-fid -->
                            <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style2">
                                <div class="prt-fid-icon-wrapper">
                                    <i class="flaticon-office-building"></i>
                                </div>
                                <div class="prt-fid-contents">
                                    <h4 class="prt-fid-inner">
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="25" data-interval="5" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">25
                                        </span>
                                    </h4>
                                </div>
                                <h3 class="prt-fid-title">Countries we deal in</h3>
                                <div class="prt-fid-desc">
                                    <p><?php echo APP_INFO['APP_NAME'];?> covers major developed countries</p>
                                </div>
                            </div><!-- prt-fid end -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- prt-fid -->
                            <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style2">
                                <div class="prt-fid-icon-wrapper">
                                    <i class="flaticon-teamwork"></i>
                                </div>
                                <div class="prt-fid-contents">
                                    <h4 class="prt-fid-inner">
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="50" data-interval="5" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">50
                                        </span>
                                    </h4>
                                </div>
                                <h3 class="prt-fid-title">Team Members</h3>
                                <div class="prt-fid-desc">
                                    <p>we have well experience team for immigration services and consultanting.</p>
                                </div>
                            </div><!-- prt-fid end -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- prt-fid -->
                            <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style2">
                                <div class="prt-fid-icon-wrapper">
                                    <i class="flaticon-process"></i>
                                </div>
                                <div class="prt-fid-contents">
                                    <h4 class="prt-fid-inner">
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="8" data-interval="1" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">8
                                        </span>
                                        <span class="fid-prefix">K</span>
                                    </h4>
                                </div>
                                <h3 class="prt-fid-title">Visa Processed</h3>
                                <div class="prt-fid-desc">
                                    <p><?php echo APP_INFO['APP_NAME'];?> provides successfully visas for clients.</p>
                                </div>
                            </div><!-- prt-fid end -->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!-- prt-fid -->
                            <div class="prt-fid inside prt-fid-with-icon prt-fid-view-lefticon style2">
                                <div class="prt-fid-icon-wrapper">
                                    <i class="flaticon-office-building"></i>
                                </div>
                                <div class="prt-fid-contents">
                                    <h4 class="prt-fid-inner">
                                        <span data-appear-animation="animateDigits" data-from="0" data-to="100" data-interval="5" data-before="" data-before-style="sup" data-after="+" data-after-style="sub" class="numinate">1000
                                        </span>
                                        <span class="fid-prefix">+</span>
                                    </h4>
                                </div>
                                <h3 class="prt-fid-title">Satisfied Clients</h3>
                                <div class="prt-fid-desc">
                                    <p><?php echo APP_INFO['APP_NAME'];?> have happy clients all over the india.</p>
                                </div>
                            </div><!-- prt-fid end -->
                        </div>
                    </div>
                </div>
            </section>
            <!--fid-section-end-->



            <?php $Dir . "section/client-section.php"; ?>

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