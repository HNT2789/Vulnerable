<?php


// Database connection settings
$db_server = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "SQLI";

// SQLite database name
$db_sqlite = "db/bwapp.sqlite";

// SMTP settings
$smtp_sender = "thaihoang2789@gmail.com";
$smtp_recipient = "hoangnguyen177199@gmail.com";
$smtp_server = "";

$AIM_IPs = array("6.6.6.6", "6.6.6.7", "6.6.6.8", "10.0.1.66");
$AIM_subnet = "6.6.6.0/30";
//
// Add here the files that could break bWAPP or your web server in the A.I.M. mode
$AIM_exclusions = array("aim.php", "ba_logout.php", "cs_validation.php", "csrf_1.php", "http_verb_tampering.php", "ldap_connect.php", "ldapi.php", "portal.php", "sm_dos_2.php", "sm_obu_files.php");

$evil_bee = 0;

// Static credentials
// These credentials are used on some PHP pages
$login = "bee";
$password = "bug";

?>