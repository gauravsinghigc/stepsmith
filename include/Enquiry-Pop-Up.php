  <section class="popup-div" id="popupbox">
    <a href="#" class="close" onclick="PopUpHandler('popupbox')"><i class="fa fa-times"></i></a>
    <div class="container">
      <form class="row" action="<?php echo DOMAIN;?>/controller/EnquiryController.php" method="POST">
        <div class="row">
          <div class="col-md-6">
           <div class="p-4">
           <img src="<?php echo STORAGE_URL;?>/app/pop-up.jpg" class="img-fluid mt-2">
           </div>
          </div>
          <div class="col-md-6">
            <div class="row">
            <div class="col-md-12">
          <h3 class="mt-3">Book Free Immigration Consultation</h3>
          <p>please fill all required details.</p>
         
        </div>
        <div class="col-md-6 form-group">
          <label>Full name <span class="text-danger">*</span></label>
          <input type="text" name="FullName" class="form-control" required="">
        </div>
        <div class="col-md-6 form-group">
          <label>Phone number <span class="text-danger">*</span></label>
          <input type="text" name="PhoneNumber" class="form-control form-control-sm" required="">
        </div>
        <div class="col-md-6 form-group">
          <label>Email-ID <span class="text-danger">*</span></label>
          <input type="email" name="EmailId" class="form-control form-control-sm" required="">
        </div>
        <div class="col-md-6 form-group">
          <label>Need Help for<span class="text-danger">*</span></label>
          <select name="Requirement" style="padding:0.8rem;" class="form-control" required="">
            <option value="Others">Select Requirement</option>
            <option value="PR Visa Services"> PR Visa Services</option>
            <option value="Work Visa">Work Visa</option>
            <option value="Tourist Visa">Tourist Visa</option>
            <option value="Study Visa">Study Visa</option>
            <option value="Others">Others</option>
          </select>
        </div>
        <div class="col-md-12 form-group">
          <label>Enter Message <span class="text-danger">*</span></label>
          <textarea name="Message" class="form-control" rows="5"></textarea>
        </div>
        <div class="col-md-12 mt-2 justify-content-right">
          <button class="btn btn-md btn-primary" name="SendEnquiry"> <i class="fa fa-check"></i> Submit Details</button>
        </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </section>

  <script>
    window.onload = function() {
        setTimeout(function(){
            document.getElementById("popupbox").style.display = "block";
        }, 2000);
    };

    function PopUpHandler(data){
    var PopUpBox = document.getElementById(data);

    if(PopUpBox.style.display == "none"){
        PopUpBox.style.display = "block";
    } else {
        PopUpBox.style.display = "none";
    }
}
  </script>