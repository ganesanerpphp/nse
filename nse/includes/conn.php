<?php 
ob_start ();
session_start ();
error_reporting(0);
$dbhost = 'localhost';
$conn=mysql_connect("localhost","root","");


mysql_set_charset('utf8',$conn);

if (!$conn) {
    header("location:error.php");
	}
$dbname = 'nse';
mysql_select_db($dbname);





?>