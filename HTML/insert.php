<?php
header("Content-Security-Policy: script-src 'self' insert.php");
if(empty($_SERVER['CONTENT_TYPE']))
{
  $_SERVER['CONTENT_TYPE'] = "application/x-www-form-urlencoded";
}

print "CONTENT_TYPE: " . $_SERVER['CONTENT_TYPE'] . "<BR />";
$data = file_get_contents('php://input');
print "DATA: <pre>";
var_dump($data);
var_dump($_POST);
print "</pre>";

if($_SERVER['REQUEST_METHOD'] == "POST"){
$name = $_REQUEST['name'];
echo $name;
$email = $_REQUEST['email'];
echo $email;
$phone = $_REQUEST['phone'];
$company = $_REQUEST['company'];
$industry = $_REQUEST['industry'];
$message = $_REQUEST['message'];

//if(isset($_POST(['submit']))){
if(!empty($name) || !empty($email) || !empty($phone) || !empty($company) || !empty($industry) || !empty($message)){
   $host = "localhost";
   $dbUsername = "admin";
   $dbPassword = "admin";
   $dbname = "id12686733_bbgi";

   //create connection
   $conn = mysqli_connect($host, $dbUsername, $dbPassword, $dbname);
    //$conn = mysqli_connect("localhost", "admin", "admin", "id12686733_bbgi");
    //$conn = new PDO("mysql:host=$host;dbname=$dbname", $dbUsername, $dbPassword);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    echo "Connected successfully";

   if(mysqli_connect_error()){
     die('Connect Error('. mysqli_connect_errorno().')'.mysqli_connect());
   } else {
    $SELECT = "SELECT name From suppliers Where email = ? Limit 1";
    $INSERT = "INSERT Into suppliers (name, email, phone, company, industry, message) values(?,?,?,?,?)";

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
     $stmt->bind_param("ssssii", $name, $email, $phone, $company, $industry, $message);
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
//}
}
?>
