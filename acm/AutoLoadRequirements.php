<?php

//initial required files
$RequiredFiles = [
 "Initializer.php",
 "UrlHandler.php",
 "AppInformation.php"
];

foreach ($RequiredFiles as $Key => $File) {
 require __DIR__ . "/$File";
}

//require all modules;
$AllModules = array(
 "ServerMailSender.php",
 "Upload.php"
);

foreach ($AllModules as $module) {
 include(__DIR__ . "/modules/$module");
}

//Load Application Content
if ($handle = opendir(__DIR__ . "/../content")) {
 while (false !== ($entry = readdir($handle))) {
  if ($entry != "." && $entry != "..") {
   include __DIR__ . "/../content/$entry";
  }
 }
 closedir($handle);
}
