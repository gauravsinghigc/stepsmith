 <!-- footer start -->
 <footer class="footer widget-footer clearfix pb-1">
  <div class="second-footer prt-bgimage-yes bg-footer prt-bg bg-base-dark">
   <div class="prt-row-wrapper-bg-layer prt-bg-layer"></div>
   <div class="container">
    <div class="row">
     <div class="col-xl-3 col-lg-6 col-md-6 widget-area">
      <div class="widget">
       <div class="widgte-text">
        <div class="widget-title">
         <h3>Imagine A Better Future</h3>
        </div>
        <p>The Most Eminent Visas & Immigration Consultant service provider.</p>
       </div>
       <div class="widget_nav_menu">
        <ul class="menu-footer-quick-links">
         <li><a href="<?php echo DOMAIN;?>/our-services"><i class="fa fa-angle-right"></i>Our Services</a></li>
         <li><a href="<?php echo DOMAIN;?>/visa-categories/pr-visa/"><i class="fa fa-angle-right"></i> PR Visa</a></li>
         <li><a href="<?php echo DOMAIN;?>/visa-categories/study-visa/"><i class="fa fa-angle-right"></i>Study Visa</a></li>
         <li><a href="<?php echo DOMAIN;?>/visa-categories/work-visa/"><i class="fa fa-angle-right"></i>Work Visa</a></li>
         <li class="last-link"><a href="<?php echo DOMAIN;?>/evaluation-form/"><i class="fa fa-angle-right"></i>Application</a></li>
         <li class="last-link"><a href="<?php echo DOMAIN;?>/gallery"><i class="fa fa-angle-right"></i>Gallery</a></li>
        </ul>
       </div>
       <div class="widget_social">
        <div class="social-icons social-hover">
         <ul class="social-icons d-flex">
            <?php
             foreach (APP_SOCIAL_ACCOUNTS as $key => $value) { ?>
          <li>
           <a class="prt-social-<?php echo $key;?>" href="<?php echo $value['url'];?>" aria-label="<?php echo $key;?>"><i class="<?php echo $value['icon'];?>"></i></a>
          </li>
         <?php } ?>
         </ul>
        </div>
       </div>
      </div>
     </div>
     <div class="col-xl-3 col-lg-6 col-md-6 widget-area">
      <div class="widget">
       <div class="enhanced-text-widget en-1">
        <div class="widget-title">
         <h3>100+ Best Universities Scholarship Programs From 20 Countries</h3>
        </div>
        <p>We also help with other family based employment ased and investment based Immigration.</p>
        <div class="prt-advertiser">
         <a href="<?php echo DOMAIN;?>/countries/australia/"><img src="<?php echo STORAGE_URL;?>/images/flag-1.png" alt="image"></a>
         <a href="<?php echo DOMAIN;?>/countries/united-state-of-america/"><img src="<?php echo STORAGE_URL;?>/images/flag-2.png" alt="image"></a>
         <a href="<?php echo DOMAIN;?>/countries/canada/"><img src="<?php echo STORAGE_URL;?>/images/flag-3.png" alt="image"></a>
         <a href="<?php echo DOMAIN;?>/countries/germany/"><img src="<?php echo STORAGE_URL;?>/images/flag-4.png" alt="image"></a>
        </div>
        <div class="">
         <a class="btn btn-md btn-primary mt-30" href="<?php echo DOMAIN;?>/evaluation-form/"> Apply Visa Now! </a>
        </div>
       </div>
      </div>
     </div>
     <div class="col-xl-3 col-lg-6 col-md-6 widget-area">
      <div class="widget">
       <div class="enhanced-text-widget">
        <div class="widget-title">
         <h3>Get In Touch</h3>
        </div>
        <div class="res-767-pb-18">
         <p><?php echo APP_ADDRESS['Address']['Details'];?></p>
         <p>Front Desk: <strong><a href="tel:<?php echo APP_PHONE_NUMBERS['Sales'];?>"><?php echo APP_PHONE_NUMBERS['Sales'];?></a></strong></p>
         <p>Email: <strong><a href="mailto:<?php echo APP_EMAIL_ID['enquiry'];?>"><?php echo APP_EMAIL_ID['enquiry'];?></a></strong></p>
        </div>
       </div>
       <div class="widget-form">
       <a href="<?php echo DOMAIN;?>/pay" class="btn btn-md btn-primary">Pay Online</a>
       <hr>
       <img src="<?php echo STORAGE_URL;?>/pay/pay-method.png" class="img-fluid mt-2">
       </div>
      </div>
     </div>
     <div class="col-xl-3 col-lg-6 col-md-6 widget-area">
       <div class="description">
        <iframe src="<?php echo STORAGE_URL;?>/docs/Stepsmith Brochure.pdf" class="w-100 border-none" style="height:17rem;"></iframe> 
    
    <a href="<?php echo STORAGE_URL;?>/docs/Stepsmith Brochure.pdf" download="<?php echo STORAGE_URL;?>/docs/Stepsmith Brochure.pdf">
        <img src="<?php echo STORAGE_URL;?>/app/download.gif" class="img-fluid w-50 d-block mx-auto mt-3">
    </a>    
      </div>
     </div>
    </div>
   </div>
  </div>
  <div class="bottom-footer-text prt-bg copyright">
   <div class="container">
    <div class="row">
     <div class="col-sm-12">
      <div class="text-left">
       <span class="cpy-text"> Copyright © 2022 <a href="<?php echo DOMAIN;?>" class=" font-weight-500"> <?php echo APP_INFO['APP_NAME'];?> </a> Managed By Navix Consultancy Services.</span>
      </div>
     </div>
    </div>
   </div>
  </div>
 </footer><!-- footer end -->

 <section class="whatsapp-icon">
     <a href="whatsapp://send?phone=<?php echo APP_PHONE_NUMBERS['whatsapp'];?>&text=Hey <?php echo APP_INFO['APP_NAME'];?>, please share more details about your services...">
         <img src="<?php echo STORAGE_URL;?>/app/wp.gif" class="img-fluid">
     </a>
 </section>

 <!-- Messenger Chat Plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat Plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "104370911159661");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>

    <?php include __DIR__."/Enquiry-Pop-Up.php"; ?>