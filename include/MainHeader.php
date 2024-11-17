<!-- header start -->
<header id="masthead" class="header prt-header-style-01">
 <!-- topbar -->
 <div class="top_bar prt-topbar-wrapper text-base-white clearfix">
  <div class="container-fluid">
   <div class="row">
    <div class="col-lg-12">
     <div class="d-flex flex-row align-items-start justify-content-start">
      <div class="top_bar_contact_item">
       <span class="text-base-skin">Email:</span><a href="mailto:<?php echo APP_EMAIL_ID['enquiry'];?>">
        <?php echo APP_EMAIL_ID['enquiry'];?>
       </a>
      </div>
      <div class="top_bar_contact_item">
       <span class="text-base-skin">Call:</span><a href="tel:<?php echo APP_PHONE_NUMBERS['Sales'];?>"><?php echo APP_PHONE_NUMBERS['Sales'];?></a>
      </div>
      <div class="top_bar_contact_item">
       <span class="text-base-skin">Address:</span><a href="<?php echo APP_ADDRESS['Address']['url'];?>" target="_blank"><?php echo APP_ADDRESS['Address']['Details'];?></a>
      </div>
      <div class="top_bar_contact_item top_bar_social ms-auto">
       <ul class="social-icons">
        <?php foreach (APP_SOCIAL_ACCOUNTS as $key => $value) {
        if(strpos($key, 'facebook') !== false || strpos($key, 'instagram') !== false || strpos($key, 'twitter') !== false || strpos($key, 'whatsapp') !== false){ ?>
        <li class="prt-social-<?php echo $key;?>"><a href="<?php echo $value['url'];?>" rel="noopener"><i class="<?php echo $value['icon'];?>"></i><?php echo $key;?></a>
        </li>
    <?php } } ?>
       </ul>
      </div>
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- topbar end -->
 <!-- site-header-menu -->
 <div id="site-header-menu" class="site-header-menu">
  <div class="site-header-menu-inner prt-stickable-header">
   <div class="container-fluid">
    <div class="row">
     <div class="col-lg-12">
      <!--site-navigation -->
      <div class="site-navigation d-flex align-items-center justify-content-between">
       <!-- site-branding -->
       <div class="site-branding me-auto">
        <h1>
         <a class="home-link" href="<?php echo DOMAIN;?>" title="Truvik" rel="home">
          <img id="logo-img" height="150" width="230" class="img-fluid auto_size" src="<?php echo APP_INFO['APP_LOGO'];?>" alt="<?php echo APP_INFO['APP_NAME'];?>" title='<?php echo APP_INFO['APP_NAME'];?>'>
         </a>
        </h1>
       </div><!-- site-branding end -->
       <div class="btn-show-menu-mobile menubar menubar--squeeze">
        <span class="menubar-box">
         <span class="menubar-inner"></span>
        </span>
       </div>
       <!-- menu -->
       <nav class="main-menu menu-mobile" id="menu">
        <ul class="menu">
         <li class="mega-menu-item">
          <a href="<?php echo DOMAIN;?>">Home</a>
         </li>
          <li class="mega-menu-item">
          <a href="<?php echo DOMAIN;?>/about-us">About Us</a>
         </li>
         <li class="mega-menu-item">
          <a href="#" class="mega-menu-link">Countries</a>
          <ul class="mega-submenu">
            <li class="mega-menu-item">
            <a href="<?php echo DOMAIN;?>/countries/canada" class="mega-menu-link">Canada</a>
            <ul class="mega-submenu">
             <li><a href="<?php echo DOMAIN;?>/countries/canada/ontario">Ontario</a></li>
             <li><a href="<?php echo DOMAIN;?>/countries/canada/saskatchewan">Saskatchewan</a></li>
             <li><a href="<?php echo DOMAIN;?>/countries/canada/alberta">Alberta</a></li>
             <li><a href="<?php echo DOMAIN;?>/countries/canada/british-columbia">British Columbia</a></li>
             <li><a href="<?php echo DOMAIN;?>/countries/canada/monitabo">Monitabo</a></li>
             <li><a href="<?php echo DOMAIN;?>/countries/canada/atlantic-provinces">Atlantic Provinces</a></li>
            </ul>
           </li>
           <li><a href="<?php echo DOMAIN;?>/countries/australia">Australia</a></li>
           <li><a href="<?php echo DOMAIN;?>/countries/germany">Germany</a></li>
           <li><a href="<?php echo DOMAIN;?>/countries/united-state-of-america">United States of America</a></li>
          </ul>
         </li>
         <li class="mega-menu-item">
          <a href="<?php echo DOMAIN;?>/our-services/" class="mega-menu-link">Our Services</a>
          <ul class="mega-submenu">
           <li><a href="<?php echo DOMAIN;?>/our-services/visa-documentations">Visa Documentations</a></li>
           <li><a href="<?php echo DOMAIN;?>/our-services/exam-preparations">Exam Preparations</a></li>
           <li><a href="<?php echo DOMAIN;?>/our-services/post-landing-services">Post Landing Services</a></li>
          </ul>
         </li>
         <li class="mega-menu-item">
          <a href="#" class="mega-menu-link">Visa Categories</a>
          <ul class="mega-submenu">
           <li class="mega-menu-item">
            <a href="<?php echo DOMAIN;?>/visa-categories/pr-visa" class="mega-menu-link">PR Visa</a>
             <ul class="mega-submenu">
             <li><a href="<?php echo DOMAIN;?>/visa-categories/pr-visa/australia-permanent-residence">Australia Permanent Residence</a></li>
             <li><a href="<?php echo DOMAIN;?>/visa-categories/pr-visa/canada-permanent-residence">Canada Permanent Residence</a></li>
            </ul>
        </li>
        <li class="mega-menu-item">
            <a href="<?php echo DOMAIN;?>/visa-categories/study-visa" class="mega-menu-link">Study Visa</a>
             <ul class="mega-submenu">
             <li><a href="<?php echo DOMAIN;?>/visa-categories/study-visa/australia-study-visa">Australia Study Visa</a></li>
             <li><a href="<?php echo DOMAIN;?>/visa-categories/study-visa/canada-study-visa">Canada Study Visa</a></li>
            </ul>
        </li>
           <li><a href="<?php echo DOMAIN;?>/visa-categories/tourist-visa">Tourist Visa</a></li>
           <li><a href="<?php echo DOMAIN;?>/visa-categories/job-seeker-visa">Job Seeker Visa</a></li>
           <li><a href="<?php echo DOMAIN;?>/visa-categories/work-visa">Work Visa</a></li>
          </ul>
         </li>
         <li class="mega-menu-item">
          <a href="<?php echo DOMAIN;?>/gallery">Gallery</a>
         </li>
         <li class="mega-menu-item">
          <a href="<?php echo DOMAIN;?>/evaluation-form">Assessment form</a>
         </li>
         <li class="mega-menu-item">
          <a href="<?php echo DOMAIN;?>/contact-us">Contact us</a>
         </li>
        </ul>
       </nav><!-- menu end -->
       <!-- header_extra -->
       <div class="pl-2 d-flex flex-row align-items-center justify-content-center">
        <div class="header_btn">
         <a class="prt-btn prt-btn-size-sm prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor" href="<?php echo DOMAIN;?>/pay">Pay</a>
        </div>
       </div><!-- header_extra end -->
      </div><!-- site-navigation end-->
     </div>
    </div>
   </div>
  </div>
 </div>
 <!-- site-header-menu end-->
</header><!-- header end -->