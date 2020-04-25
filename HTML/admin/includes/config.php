<?php

// echo "tet"; die();
$ss_rootDir  = $_SERVER["DOCUMENT_ROOT"]."/admin/" ;	//DIR path of the site  d
$ss_rootAdminDir = $_SERVER["DOCUMENT_ROOT"]."/admin/";	//DIR path of the site

$ss_DbInfoFile = $_SERVER["DOCUMENT_ROOT"]."/secure/conn.txt";	//file carring database connectivity information
$ss_modulesDir = $ss_rootAdminDir."includes/modules/";		//DIR carring all the upladed documents
$ss_templatesDir = $ss_rootAdminDir."templates/";		//DIR path for all the templates for the requested pages

$ss_mainTemplateFile = "maintemplate.tpl.php";	//for default page on home page if logged in

$ss_rootRedirectPath = 'https://bbgi.co.za/admin';	//Site path, will be use on some links and to redirect from one page to another
$ss_modulesPath = $ss_rootRedirectPath.'includes/modules/';	//Modules path, will be used to include the modules used in different scripts, e.g thinftp

$ss_redirectTo = '';			//Fill the string this variable and it will rediect it before template file process
$now = strtotime(date('Y-m-d H:i:s'));

$ss_dispErrArr = array();		//for error message(s)
$ss_dispMsgArr = array();
$ss_dispErrArr1 = array();
//for success message(s)

?>
