<?php
header("Content-Security-Policy: script-src 'self' 'unsafe-inline' insert-members.php");
if(empty($_SERVER['CONTENT_TYPE']))
{
  $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded";
}

//print "CONTENT_TYPE: " . $_SERVER['CONTENT_TYPE'] . "<BR />";
/*$data = file_get_contents('php://input');
print "DATA: <pre>";
var_dump($data);
var_dump($_POST);
print "</pre>";*/

if($_SERVER['REQUEST_METHOD'] == "POST"){

$name = $_REQUEST['name'];
$surname = $_REQUEST['surname'];
$profession = $_REQUEST['profession'];
$company = $_REQUEST['company'];
$email = $_REQUEST['email'];
$phone = $_REQUEST['phone'];
$service = $_REQUEST['service'];
$description = $_REQUEST['description'];
$industry = $_REQUEST['industry'];
$legal = $_REQUEST['legal'];
$terms = $_REQUEST['terms'];
$bbbee = $_REQUEST['bbbee'];
$commission = $_REQUEST['commission'];
$subscription = $_REQUEST['subscription'];


//if(isset($_POST(['submit']))){
if(!empty($name) ||!empty($surname) ||!empty($profession) || !empty($company) || !empty($email) || !empty($phone) || !empty($service) ||
    !empty($description) || !empty($industry) || !empty($legal) || !empty($terms) || !empty($bbbee) || !empty($commission) ||
    !empty($subscription)){
   $host = "localhost";
   $dbUsername = "bbgicgch_admin";
   $dbPassword = "Ch4ng31sg00d";
   $dbname = "bbgicgch_bbgi";

   //create connection
    $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    //echo "Connected successfully";

   if(mysqli_connect_error()){
     die('Connect Error('. mysqli_connect_errorno().')'.mysqli_connect());
   } else {
    $SELECT = "SELECT name From members Where email = ? Limit 1";
    $INSERT = "INSERT Into members (name, surname, profession, company, email, phone, service, description, industry, legal, terms, bbbee, commission, subscription) values(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

    //Prepare statement
    $stmt = $conn->prepare($SELECT);
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $stmt->bind_result($email);
    $stmt->store_result();
    $rnum = $stmt->num_rows;

    if($rnum==0){
     $stmt->close();

     $stmt = $conn->prepare($INSERT);
     $stmt->bind_param("ssssssssssssss", $name, $surname, $profession, $company, $email, $phone, $service, $description, $industry, $legal, $terms, $bbbee, $commission, $subscription );
     $stmt->execute();
       echo "<script type='text/javascript'>alert(' New member inserted successfully');
                                             window.location.href='http://bbgi.co.za/membership.php';</script>";
    } else {
     //echo " Supplier already registered in our database";
      echo "<script type='text/javascript'>alert(' Member already registered in our database');
                                             window.location.href='http://bbgi.co.za/membership.php';</script>";
    }
    $stmt->close();
    $conn->close();
   }
} else {
  echo "All fields are required";
  die();
}
//}
}
?>
