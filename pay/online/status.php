<?php
$Dir = "../../";
include $Dir . "acm/AutoLoadRequirements.php";

$PAYMENT_STATUS = $_SESSION['PAYMENT_STATUS'];
$PAYMENT_DETAILS = $_SESSION['TXNID'];
$PAYMENT_MODE = $_SESSION['PAYMENT_MODE'];
$PAYMENT_SOURCE = $_SESSION['PAYMENT_SOURCE'];
$MORE_DETAILS =	$_SESSION['COMPLETE_DETAILS'];
$PAID_AMOUNT = $_SESSION['PAID_AMOUNT'];

$MESSAGE = $_COOKIE['MESSAGE'];
$PHONE = $_COOKIE['PHONE'];
$EMAIL = $_COOKIE['EMAIL'];
$FULL_NAME = $_COOKIE['FULL_NAME'];

$Subject = "Payment Received @ Rs.$PAID_AMOUNT : $EMAIL";
$Message = "<p>";
$Message .="<span>Full Name:</span><br>$FULL_NAME<br><br>";
$Message .="<span>Phone Number:</span><br>$PHONE<br><br>";
$Message .="<span>EmailId:</span><br>$EMAIL<br><br>";
$Message .="<span>Pay Mode:</span><br>$PAYMENT_MODE<br><br>";
$Message .="<span>Payment Source:</span><br>$PAYMENT_SOURCE<br><br>";
$Message .="<span>Status :</span><br>$PAYMENT_STATUS<br><br>";
$Message .="<span>TXNID :</span><br>$PAYMENT_DETAILS<br><br>";
$Message .="<span>Amount :</span><br>$PAID_AMOUNT<br><br>";
$Message .="<span>Message :</span><br>$MESSAGE";
$Message .="</p>";

$Mails = ["".$EMAIL."", "info@step-smith.com"];

foreach($Mails as $Mail){
	SENDMAILS($Subject, "Payment Details are :", $Mail, $Message, false);
}
?>
<html>
	<head>
		<title>Payment Status @ <?php echo APP_INFO['APP_NAME'];?></title>
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
                                    <h2 class="title">Payment Status</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>Payment Status</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>

        <!--site-main start-->
        <div class="site-main">

        	<div class="container">
        		<div class="row">
        			<div class="col-md-12 d-block mx-auto">
		
<table class="table table-striped w-50" style="text-align:left;" align="left">
			<tr>
				<td>Applicant Name</td>
				<th style="width:50%;"><?php echo $FULL_NAME;?></th>
			</tr>
			<tr>
				<td>Phone Number</td>
				<th><?php echo $PHONE;?></th>
			</tr>
			<tr>
				<td>Email-Id</td>
				<th><?php echo $EMAIL;?></th>
			</tr>
			<tr>
				<td>Payment Status</td>
				<th><?php echo $PAYMENT_STATUS;?></th>
			</tr>
			<tr>
				<td>Payment Source</td>
				<th><?php echo $PAYMENT_SOURCE;?></th>
			</tr>
			<tr>
				<td>Payment Mode</td>
				<th><?php echo $PAYMENT_MODE;?></th>
			</tr>
			<tr>
				<td>Transaction Id</td>
				<th><?php echo $PAYMENT_DETAILS;?></th>
			</tr>
			<tr>
				<td>Txn Details</td>
				<th><?php echo $MORE_DETAILS;?></th>
			</tr>
			<tr>
				<td>Message</td>
				<th><?php echo $MESSAGE;?></th>
			</tr>
		</table>
		
		<hr>
	</div>
</div>
</div>
</div>
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