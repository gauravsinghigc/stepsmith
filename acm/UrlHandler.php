<?php

//check SSL is installed or not
if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
 $link = "https";
} else {
 $link = "http";
}

// Here append the common URL characters.
$link .= "://";

//dir & domain setup
define("HOST", $HOST = $_SERVER['SERVER_NAME']);

//list of local hosts or servers
define("LOCAL_HOST", array(
 "127.0.0.1",
 "::1",
 "localhost",
 "192.168.1.9",
 "192.168.43.14",
 "192.168.1.10",
 "192.168.1.11",
 "192.168.1.5",
 "192.168.1.6",
 "192.168.1.2",
 "192.168.1.7",
 "192.168.1.8"
));

//filter domain from local or live server
if (in_array("" . HOST . "", LOCAL_HOST)) {
 define("DOMAIN", $link . HOST . "/stepsmith");
} else {
 define("DOMAIN", $link . HOST);
}

//app URL constants
define("STORAGE_URL", DOMAIN . "/storage");
define("BLOG_STORAGE_URL", DOMAIN . "/storage/blogs");
define("ASSETS_URL", DOMAIN . "/assets");
define("PAYMENT_URL", "https://pages.razorpay.com/pl_KEwG0Ulvqb8vWj/view");
