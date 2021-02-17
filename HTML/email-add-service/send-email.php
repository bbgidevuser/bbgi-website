<?php
header("Content-Security-Policy: script-src 'self' 'unsafe-inline' send-email.php");
require_once("../config.php");
$errors = '';
$myemail = 'sazi.mtandabuzo@goldours.co.za';//<-----Put Your email address here.
//$myemail = 's_mtandabuzo@yahoo.com';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
    empty($_POST['surname']) ||
    empty($_POST['profession']) ||
    empty($_POST['company']) ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['service']) ||
    empty($_POST['description']) ||
    empty($_POST['industry']) ||
    empty($_POST['legal']) ||
    empty($_POST['terms']) ||
    empty($_POST['bbbee']) ||
    empty($_POST['commission']) ||
    empty($_POST['subscription']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$surname = $_POST['surname'];
$profession = $_POST['profession'];
$company = $_POST['company'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$service = $_POST['service'];
$description = $_POST['description'];
$industry = $_POST['industry'];
$legal = $_POST['legal'];
$terms = $_POST['terms'];
$bbbee = $_POST['bbbee'];
$commission = $_POST['commission'];
$subscription = $_POST['subscription'];

if (!preg_match(
    "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/i",
    $email))
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

    $email_subject = "Add Service and Supplier form submission: $name";

    $email_body = "You have received a new message for adding a service and supplier on bbgi.co.za. ".

        " Here are the client details:\n Name: $name \n Surname: $surname \n Profession: $profession \n ".

        "Company: $company \n Email: $email \n Phone: $phone \n New Service or Product: $service \n Description: $description \n ".
        "Industry: $industry \n Legal: $legal ";

    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email";

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errorno().')'.mysqli_connect());
    } else {
        $SELECT = "SELECT name From suppliers Where email = ? Limit 1";
        $INSERT="INSERT INTO suppliers (name, surname, profession, company, email, phone, service, description, industry, legal, terms, bbbee, commission, subscription) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

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
            $stmt->bind_param("ssssssssssssss", $name, $surname, $profession, $company, $email, $phone, $service, $description, $industry, $legal, $terms, $bbbee, $commission, $subscription);
            $stmt->execute();
            mail($to,$email_subject,$email_body,$headers);
            echo "<script type='text/javascript'>alert(' New supplier product or service inserted successfully.');
                                                                 window.location.href='http://bbgi.co.za/add-service.php';</script>";
        } else {
            echo "<script type='text/javascript'>alert(' Supplier product or service already registered in our database.');
                                                        window.location.href='http://bbgi.co.za/add-service.php';</script>";
        }
    }

    window.opener.location.reload(true);
    window.close();

    $stmt->close();
    $conn->close();
}
?>
