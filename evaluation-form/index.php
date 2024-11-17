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
    <title>Assessment Form | <?php echo APP_INFO['APP_NAME']; ?> - <?php echo APP_INFO['APP_TAG_LINE']; ?></title>
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
                                    <h2 class="title">Assessment Form</h2>
                                </div>
                                <div class="breadcrumb-wrapper">
                                    <i class="flaticon-home"></i>
                                    <span>
                                        <a title="Homepage" href="<?php echo DOMAIN;?>">Home</a>
                                    </span>
                                    <div class="prt-sep"> - </div>
                                    <span>Assessment Form</span>
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
                        <div class="col-lg-7 d-block mx-auto">
                            <div class="bg-base-grey spacing-25">
                                <!-- section title -->
                                <div class="section-title style7">
                                    <div class="title-header">
                                        <h2 class="title">Assessment Form</h2>
                                        <p>Fill all the details and submit required documents.</p>
                                    </div>
                                </div><!-- section title end -->
                                <form action="../controller/AssetsController.php" method="POST" enctype="multipart/form-data" class="contact_form clearfix" method="post">
                                    <div class="row">
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Consultant Name</label>
                                                <input class="form-control-sm form-control" name="ConsultantName" type="text" value="" placeholder="Enter Consultant Name" required="required">
                                            </div>
                                        </div>

                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Select Country</label>
                                                <select name="SelectedCountry" required="">
                                                    <option value="Others">Select Country</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Germany">Germany</option>
                                                    <option value="Middle East Countries">Middle East Countries</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h5>Applicant Personal Details</h5>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Full Name</label>
                                                <input class="form-control-sm form-control" name="FullName" type="text" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Date of Birth</label>
                                                <input class="form-control-sm form-control" name="DateOfBirth" type="date" value="<?php echo date('Y-m-d');?>" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Father Name</label>
                                                <input class="form-control-sm form-control" name="FatherName" type="text" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Mother Name</label>
                                                <input class="form-control-sm form-control" name="MotherName" type="text" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Phone number</label>
                                                <input class="form-control-sm form-control" name="Phonenumber" type="tel" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Email-id</label>
                                                <input class="form-control-sm form-control" name="EmailId" type="email" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-12">                  
                                            <div class="form-group">
                                                <label>Complete Current Address</label>
                                                <textarea name="CurrentAddress" row="2" required></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                        <h5>Family Information</h5>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Marital Status</label>
                                                <select name="MaritalStatus" required>
                                                    <option value="Others">Select Marital Status</option>
                                                    <option value="Married">Married</option>
                                                    <option value='Un-Married'>Un-Married</option>
                                                </select>
                                                </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Going Alone/With Spouse</label>
                                                <select name="GoneStatus" required>
                                                    <option value="Others">Select Going Status</option>
                                                    <option value="Going Alone">Going Alone</option>
                                                    <option value='With Spouse'>With Spouse</option>
                                                </select>
                                                </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Spouse Work Experience</label>
                                                <textarea name="SpouseWorkExperience" row="2"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>No Of Kids</label>
                                                <select name="NumberOfKids" required>
                                                    <option value="0">Select No of Kids</option>
                                                    <option value="No Kids">No KIDS</option>
                                                    <option value='1 Kids'>1 kid</option>
                                                    <option value='2 Kids'>2 kids</option>
                                                    <option value='More Than 2 Kids'>More then 2 kids</option>
                                                </select>
                                                </div>
                                        </div>
                                        <div class='col-md-12'>
                                            <h5>Applicant Education</h5>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Bachler Degree Name</label>
                                                <input class="form-control-sm form-control" name="BachlerDegreeName" type="text" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Master Degree Name</label>
                                                <input class="form-control-sm form-control" name="MasterDegreeName" type="text" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Diploma name</label>
                                                <input class="form-control-sm form-control" name="DiplomaName" type="text" value="" required="required">
                                            </div>
                                        </div>
                                         <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Other name</label>
                                                <input class="form-control-sm form-control" name="OthersName" type="text" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h5>Work Experience Details</h5>
                                        </div>
                                        <div class="col-md-12">                  
                                            <div class="form-group">
                                                <label>Current CTC</label>
                                                <input class="form-control-sm form-control" name="CurrentCTC" type="text" value="" required="required">
                                            </div>
                                        </div>
                                        <div class="col-md-12">                  
                                            <div class="form-group">
                                                <label>Total Work Experience with Designations</label>
                                                <textarea name="TotalWorkExperience" row="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h5>Documents</h5>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>ID Proof</label>
                                                <input class="form-control-sm form-control" name="IDPROOF" type="file" value="" >
                                            </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Latest CV</label>
                                                <input class="form-control-sm form-control" name="LatestCV" type="file" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>All Education Docs in PDF</label>
                                                <input class="form-control-sm form-control" name="EducationalDocs" type="file" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-6">                  
                                            <div class="form-group">
                                                <label>Other Docs</label>
                                                <input class="form-control-sm form-control" name="OtherDocs" type="file" value="">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <h5>Declaration</h5>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" name="name" required>
                                            I certify that the information I have written on the application form and the documents I have submitted to be true and accurate.
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" name="name" required>
                                            Yes, I agree with the <a href="<?php echo DOMAIN;?>/term-and-conditions">terms and conditions.</a>
                                        </div>
                                        <div class="col-md-12">
                                            <input type="checkbox" name="name" required>
                                            By checking the box, I acknowledge that I will pay the Technical Evaluation fee <a href="<?php echo DOMAIN;?>/pay">Pay Fees section</a>
                                        </div>
                                        <br>
                                        <div class="mt-5">
                                            <br>
                                            <button class="submit prt-btn prt-btn-size-md prt-btn-shape-round prt-btn-style-fill prt-btn-color-skincolor" type="submit" name="SendFormToAdmin" value="submit">Submit Details</button> 
                                        </div>
                                    </div>
                                </form>
                            </div>
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