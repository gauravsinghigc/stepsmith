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
    <title>Make an Online Payment | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
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
                                    <h2 class="title">Make an Online Payment</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>Make an Online Payment</span>
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
                        <div class="col-lg-12 text-center">
                            <div class="spacing-10">
                                <!-- section title -->
                                <div class="section-title style7">
                                    <div class="title-header">
                                        <h2 class="title">Pay Gov Fees & Charges</h2>
                                        <p>You can pay through Online Payment Gateway, we accept all Credit/Debit Cards and all UPI, whatever your online mode of payment.</p>
                                    </div>
                                </div><!-- section title end -->
                            </div>
                        </div>  

                        <div class="col-md-5 d-block mx-auto mb-5">
                            <form method="post" action="pgRedirect.php">
                                <input id="ORDER_ID" name="ORDER_ID" hidden autocomplete="off"
              value="<?php echo  "SSTXN-".date("d-M-Y-") . rand(10000,99999999)?>">
              <input id="INDUSTRY_TYPE_ID" tabindex="4" hidden maxlength="12" size="12" name="INDUSTRY_TYPE_ID"
              autocomplete="off" value="Retail">
              <input id="CHANNEL_ID" tabindex="4" hidden maxlength="12" size="12" name="CHANNEL_ID" autocomplete="off"
              value="WEB">
                                <div class="form-group mb-3">
                                    <label>Full Name</label>
                                    <input type="text" name="FullName" class="form-control" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Phone Number</label>
                                    <input type="tel" name="PhoneNumber" class="form-control" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email-Id</label>
                                    <input type="email" name="EmailId" class="form-control" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Paying Amount</label>
                                    <input type="number" min="1" name="TXN_AMOUNT" class="form-control" required="">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Message</label>
                                    <textarea name="Message" class="form-control" required="" rows="4"></textarea>
                                </div>

                                <div class="form-group">
                                    <button name="MakePayment" type="Submit" class="btn btn-lg btn-primary">Make Payment</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <br><br><hr>
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