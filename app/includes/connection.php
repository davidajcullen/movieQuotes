<?php
$connectionflg = 0;
global $DB_HOST,$DB_USER,$DB_PASS;

if($connectionflg == 0)
{
      $DB_HOST = "localhost";
     $DB_USER = "root";
     $DB_PASS = "";
     $DB_NAME = "moviequotewebapp";
}
global $db;
$db = @mysql_connect($DB_HOST,$DB_USER,$DB_PASS) or die("No Connection");
mysql_select_db($DB_NAME,$db) or  die("Error In database");
$baseurl = "SELECT VALUE FROM `options` WHERE name = 'baseurl' LIMIT 1";
$run_baseurl = mysql_query($baseurl)or die(mysql_error());
$row  = mysql_fetch_assoc($run_baseurl);
$baseurl = $row['VALUE'];
?>
