<?php

$serverName = "localhost";
$dbUsername = "bbgicgch_admin";
$dbPassword = "Ch4ng31sg00d";
$dbName = "bbgicgch_bbgi";

$con = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,$dbName);
if($_SERVER['REQUEST_METHOD'] == "POST"){

$service = $_POST['service'];
$company = $_POST['com'];
$industry = $_POST['industry'];
$search = $_POST['search'];

    if(!empty($service)){
         $sql = "select name, surname, phone, company, service, industry from suppliers where service like '%$service%'";
    }

    if(!empty($company)){
          $sql = "select name, surname, phone, company, service, industry from suppliers where company like '%$company%'";
    }

    if(!empty($industry)){
          $sql = "select name, surname, phone, company, service, industry from suppliers where industry like '%$industry%'";
    }

    if(!empty($search)){
             $sql =
             "select name, surname, phone, company, service, industry from suppliers
             where name like '%$search%' or surname like '%$search%' or
             service like '%$search%' or company like '%$search%' or industry like '%$search%'";
    }

    if(!empty($sql)){
        $results = mysqli_query($con,$sql);
    } else {
        $results = [];
    }
}


if($results){
    if (isset($_POST['ajax'])) {

    while($row = mysqli_fetch_assoc($results))
     $test[] = $row;
     if(!empty($test)){
     echo json_encode($test);
     } else {
        $results = [];
     }
    }
} else {
    $results = [];
}