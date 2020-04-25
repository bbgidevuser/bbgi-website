<?php 
    ob_start();	
	session_start();
	error_reporting(0);
	include_once("config.php");
	include_once("library.php");	//library file, contains all the functions used in this application
	include_once("Pagination.php");
	$posted_date=date("y-m-d");
	
	//session_destroy();
	
	$conn= connectDB();
	
	$ss_subTemplate = getScriptFileName();

	
?>
