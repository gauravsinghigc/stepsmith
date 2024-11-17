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
    <title>Gallery | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
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
                                    <h2 class="title">Gallery</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>Gallery</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>                    
        </div>

        <!--site-main start-->
        <div class="site-main">

            <!-- about-us-section -->
            <section class="prt-row about01-about-section clearfix">
                <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h4>Educational Credentials Assessment (ECA)</h4>
                  </div>

                  <?php 
                  //Load Application Content
if ($handle = opendir(__DIR__ . "/../storage/gallery/educations")) {
 while (false !== ($entry = readdir($handle))) {
  if ($entry != "." && $entry != "..") {
   ?>
<div class="col-md-2 col-4">
    <div class="g-image">
        <a href="../storage/gallery/educations/<?php echo $entry;?>" target="_blank">
        <img loading="lazy" src="../storage/gallery/educations/<?php echo $entry;?>" class='img-fluid'>
    </a>
    </div>
</div>
   <?php
  }
 }
 closedir($handle);
}
?>
              </div>     
                </div>
            </section>

             <!-- about-us-section -->
            <section class="prt-row about01-about-section clearfix">
                <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h4>Visa Copies</h4>
                  </div>

                   <?php 
                  //Load Application Content
if ($handle = opendir(__DIR__ . "/../storage/gallery/visas")) {
 while (false !== ($entry = readdir($handle))) {
  if ($entry != "." && $entry != "..") {
   ?>
<div class="col-md-2 col-4">
    <div class="g-image">
        <a href="../storage/gallery/visas/<?php echo $entry;?>" target="_blank">
        <img loading="lazy" src="../storage/gallery/visas/<?php echo $entry;?>" class='img-fluid'>
    </a>
    </div>
</div>
   <?php
  }
 }
 closedir($handle);
}
?>
              </div>     
                </div>
            </section>

             <!-- about-us-section -->
            <section class="prt-row about01-about-section clearfix">
                <div class="container">
              <div class="row">
                  <div class="col-md-12">
                      <h4>Certificates</h4>
                  </div>
                  <?php 
                  //Load Application Content
if ($handle = opendir(__DIR__ . "/../storage/gallery/certificates")) {
 while (false !== ($entry = readdir($handle))) {
  if ($entry != "." && $entry != "..") {
   ?>
<div class="col-md-2 col-4">
    <div class="g-image">
        <a href="../storage/gallery/certificates/<?php echo $entry;?>" target="_blank">
        <img loading="lazy" src="../storage/gallery/certificates/<?php echo $entry;?>" class='img-fluid'>
    </a>
    </div>
</div>
   <?php
  }
 }
 closedir($handle);
}
?>
              </div>     
                </div>
            </section>
            <!-- about-us-section-end -->
            <section class="prt-row about01-about-section clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Our Accreditations & Industry Partners</h4>
                        </div>
                        <?php 
                  //Load Application Content
if ($handle = opendir(__DIR__ . "/../storage/gallery/partners")) {
 while (false !== ($entry = readdir($handle))) {
  if ($entry != "." && $entry != "..") {
   ?>
<div class="col-md-2 col-4">
    <div class="g-image">
        <a href="../storage/gallery/partners/<?php echo $entry;?>" target="_blank">
        <img loading="lazy" src="../storage/gallery/partners/<?php echo $entry;?>" class='img-fluid'>
    </a>
    </div>
</div>
   <?php
  }
 }
 closedir($handle);
}
?>
                    </div>
                </div>
            </section>

        

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