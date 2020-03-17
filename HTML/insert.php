<?php
$username = $_POST['username'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$company = $_POST['company'];
$industry = $_POST['industry'];
$message = $_POST['message'];

if(!empty($username) || !empty($email) || !empty($phone) || !empty($company) || !empty($industry) || !empty($message)){
   $host = "localhost";
   $dbUsername = "root";
   $dbPassword = "";
   $dbname = "bbgi";

   //create connection
   $conn = new mysqli_connect($host, $dbUsername, $dbPassword, $dbname);

   if(mysqli_connect_error()){
     die('Connect Error('. mysqli_connect_errorno().')'.mysqli_connect())
   } else {
    $SELECT = "SELECT username From suppliers Where email = ? Limit 1";
    $INSERT = "INSERT Into suppliers (username, email, phone, company, industry, message) values(?,?,?,?,?)";

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
     $stmt->bind_param("ssssii", $username, $email, $phone, $company, $industry, $message);
     $stmt->execute();
     echo "New record inserted successfully";
    } else {
     echo "Supplier already registered in our database";
    }
    $stmt->close();
    $conn->close();
   }
} else {
  echo "All fields are required";
  die();
}
?>
