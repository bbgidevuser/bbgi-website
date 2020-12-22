<?php
header("Content-Security-Policy: script-src 'self' 'unsafe-inline' send-email.php");
require_once("../config.php");
$errors = '';
$myemail = 'sazi.mtandabuzo@goldours.co.za';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
    empty($_POST['surname']) ||
    empty($_POST['profession']) ||
    empty($_POST['company']) ||
    empty($_POST['email']) ||
    empty($_POST['phone'])) ||
    empty($_POST['service-product'])) ||
    empty($_POST['description'])) ||
    empty($_POST['industry'])) ||
    empty($_POST['legal']))

{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$surname = $_POST['surname'];


$profession = $_POST['profession'];
$company = $_POST['company'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$service-product = $_POST['service-product'];
$description = $_POST['description'];
$industry = $_POST['industry'];
$legal = $_POST['legal'];

if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email_address))
{
    $errors .= "\n Error: Invalid email address";
}

if( empty($errors))

{

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

    $to = $myemail;

    $email_subject = "Add Service form submission: $name";

    $email_body = "You have received a new message for adding a service on bbgi.co.za. ".

        " Here are the client details:\n Name: $name \n Surname: $surname \n Profession: $profession \n".

        "Company: $company\n Email: $email_address\n Phone: $phone\n New Service or Product: $service-product\n Description: \n $description"
        "Industry: $industry\n Legal: $legal\n";

    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email_address";

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errorno().')'.mysqli_connect());
    } else {
        //$sql="INSERT INTO add_service (name, surname, profession, company, email, phone, service-product, description, industry, legal) VALUES ('".$name."','".$surname."', '".$profession."', '".$company."', '".$email_address."', '".$phone."',
        '".$service-product."', '".$description."', '".$industry."', '".$legal."')";
        $sql="INSERT INTO add_service (name, surname, profession, company, email, phone, service-product, description, industry, legal) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssssss", $name, $surname, $profession, $company, $email_address, $phone, $service-product, $description, $industry, $legal);
        $stmt->execute();
    }
  /*  if(!$result = $conn->query($sql)){
        echo "<script type='text/javascript'>alert(' There is a problem with the database connection');</script>";
        die('There was an error running the query [' . $conn->error . ']');
    } else {*/
        mail($to,$email_subject,$email_body,$headers);



        echo "<script type='text/javascript'>alert(' New service or product details sent successfully');
                                          window.location.href='http://bbgi.co.za/suppliers.php';</script>";
    $stmt->close();
    $conn->close();
    //}

//redirect to the 'thank you' page

    //header('Location: /suppliers.php');

}
?>
