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
    <title>Make a Payment | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
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
                                    <h2 class="title">Pay</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>Pay</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>

        <!--site-main start-->
        <div class="site-main">

          <!-- contact-form-section -->
            <section class="prt-row pb-5 mb-5 padding_bottom_zero-section contact-us-contact-form-section clearfix">
                <div class="container mb-5">
                    <div class="row g-0 mb-5">
                        <div class="col-lg-7">
                            <div class="spacing-25">
                                <!-- section title -->
                                <div class="section-title style7">
                                    <div class="title-header">
                                        <h2 class="title">Pay Gov Fees & Charges</h2>
                                        <p>You can pay through Online Payment Gateway, we accept all Credit/Debit Cards and all UPI, whatever your online mode of payment.</p>
                                    </div>
                                </div><!-- section title end -->

                                <h3>Account Details</h3>
                                <table class='table table-striped table-lg'>
                                    <tr>
                                        <th>Bank name</th>
                                        <td>IDFC First Bank</td>
                                    </tr>
                                     <tr>
                                        <th>Account name</th>
                                        <td>Stepsmith Immigration Services Pvt Ltd</td>
                                    </tr>
                                     <tr>
                                        <th>Account number</th>
                                        <td>10095856705</td>
                                    </tr>
                                     <tr>
                                        <th>IFSC code</th>
                                        <td>IDFB0021001</td>
                                    </tr>
                                     <tr>
                                        <th>SWIFT code</th>
                                        <td>IDFBINBBMUM</td>
                                    </tr>
                                    <tr>
                                        <th>Branch name</th>
                                        <td>Gurgaon Golf Course Road Branch</td>
                                    </tr>
                                </table>
                                <hr>
                                <h4>Pay via Net Banking or Debit/Credit Cards (Transaction charges may applied):</h4>

                                <a href="<?php echo DOMAIN;?>/pay/online" class="btn btn-md btn-primary">Make an Online Payment</a>
                            </div>
                        </div>  
                        <div class="col-lg-5">
                            <div class="col-bg-img-thirty-seven prt-bg prt-col-bgimage-yes col-bg-img-six">
                                <div class="prt-col-wrapper-bg-layer prt-bg-layer" style="background-image: url('<?php echo STORAGE_URL;?>/txn/stisp.05@cmsidfc-768x814.jpg');"></div>
                                <div class="layer-content"></div>                           
                            </div>
                            <img class="img-fluid prt-equal-height-image" src="<?php echo STORAGE_URL;?>/txn/stisp.05@cmsidfc-768x814.jpg" alt="col-bgimage-37">
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-form-section-end -->

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