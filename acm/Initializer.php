<?php
//Display Errors
ini_set("display_errors", 1);
ini_set("log_errors", 1);
date_default_timezone_set("Asia/Calcutta");
ini_set('error_log', dirname(__FILE__) . '/acm/logs/err_log_for_' . date("d_M_Y") . '.txt');

//session_start()
session_start();
ob_start();
