<?php 
/*
 +-------------------------------------------------------+
 | Basic e-Commerce Website								 |
 | http://www.sumanthapa.net.np/						 |
 +-------------------------------------------------------+
 | Author: Suman Thapa  Email: suman.thapa.417@gmail.com |
 +-------------------------------------------------------+ 
 */
error_reporting(~E_NOTICE);
ob_start();
session_start();

// Database properties

define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','ecom');

// Make a connection to mysql 

$conn = @mysql_connect(DBHOST,DBUSER,DBPASS);
$conn = @mysql_select_db(DBNAME);

if(!$conn)
{
	die("Sorry! There seems to be problem connecting to the database.Please check your database settings.");
}

// Define site path

define('PATH','http://localhost:8080/ftshop/');
define('PATHADMIN',PATH.'admin/');
define('SITETITLE','E-Commerce');
define('included',1);

include('functions.php');
?>