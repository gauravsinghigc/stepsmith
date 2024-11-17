<?php
//configuration Website
define("APP_INFO", [
 "APP_NAME" => "Stepsmith Immigration Services Pvt Ltd",
 "APP_SHORT_NAME" => "Stepsmith Immigration Services",
 "APP_TAG_LINE" => "Immigration & Foreign Education Services",
 "APP_LOGO" => STORAGE_URL . "/logo/stepsmith-immigration-services.png",
 "APP_LOGO_DARK" => STORAGE_URL . "/logo/stepsmith-immigration-services.png",
 "APP_ICON" => STORAGE_URL . "/logo/stepsmith-immigration-services-sq-logo.png",
 "APP_WORK_TIME" => "Mon - Sat : 10:00 AM - 6:00 PM",
]);


//app phone numbers
define("APP_PHONE_NUMBERS", [
 "Sales" => "+919599401750",
 "Support" => "",
 "Development" => "",
 "Payments" => "",
 "Recruitement" => "",
 "whatsapp" => "919599401750"
]);


//app mails ids
define("APP_EMAIL_ID", [
 "Sales" => "",
 "Support" => "",
 "Development" => "",
 "Payments" => "",
 "hr" => "",
 "enquiry" => "info@step-smith.com"
]);


//addresses
define("APP_ADDRESS", [
 "Address" => [
  "Name" => "Head Office",
  "Details" => "UG 06 MGF Metropolis Mall Gurgaon, 122002, HR, IN",
  "Map_Link" => "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14028.06442405878!2d77.0824358!3d28.4790616!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390d1962244b3263%3A0xdf42599daca4e0d7!2sSTEPSMITH%20IMMIGRATION%20SERVICES%20PVT.%20LTD.!5e0!3m2!1sen!2sin!4v1677258925777!5m2!1sen!2sin",
  "url"=>"https://goo.gl/maps/YMHnB3VXXXoZscGm9"
 ]
]);

//app social accounts
define("APP_SOCIAL_ACCOUNTS", [
 "facebook" => [
  "icon" => "icon-facebook",
  "url" => "https://www.facebook.com/stepsmithimmigration/",
  "target" => "_blank",
 ],
 "instagram" => [
  "icon" => "icon-instagram",
  "url" => "https://www.instagram.com/stepsmithimmigration/",
  "target" => "_blank"
 ],
 "linkedin" => [
  "icon" => "icon-linkedin",
  "url" => "https://in.linkedin.com/company/stepsmithimmigration",
  "target" => "_blank"
 ],
 "whatsapp" => [
  "icon" => "icon-whatsapp",
  "url" => "whatsapp://send?" . APP_PHONE_NUMBERS['whatsapp'] . "text=Hello%2C%20World!",
  "target" => "_blank"
 ],
]);
