<?php
ini_set('display_errors', 0); // 0 =  'Off'
$db     = "meaw"; // will be created in s2em.php
$host   = "localhost";
$uname  = "root";
$upass  = "";
$tb     = "employees";
if (!$connect = mysql_connect($host,$uname,$upass)){
 die('connect : failed');
}
?>