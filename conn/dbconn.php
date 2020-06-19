<?php
ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(E_NONE);

$serverName="localhost";
$dbusername="root";
$dbpassword="";
$dbname="bank_db";
$conn=new  mysqli($serverName,$dbusername,$dbpassword,$dbname) or die('the website is down for maintainance');

?>