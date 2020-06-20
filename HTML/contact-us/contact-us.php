<?php
header("Content-Security-Policy: script-src 'self' 'unsafe-inline' contact-us.php");
require_once("../config.php");
$errors = '';
$myemail = 'sazi.mtandabuzo@goldours.co.za';//<-----Put Your email address here.
if(empty($_POST['name'])  ||
    empty($_POST['email']) ||
    empty($_POST['phone']) ||
    empty($_POST['company']) ||
    empty($_POST['industry']) ||
    empty($_POST['message']))
{
    $errors .= "\n Error: all fields are required";
}

$name = $_POST['name'];
$email_address = $_POST['email'];


$phone = $_POST['phone'];
$company = $_POST['company'];
$industry = $_POST['industry'];
$message = $_POST['message'];

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

    $email_subject = "Contact form submission: $name";

    $email_body = "You have received a new message from bbgi.co.za. ".

        " Here are the client details:\n Name: $name \n ".

        "Email: $email_address\n Phone: $phone\n Company: $company\n Industry: $industry\n Message: \n $message";

    $headers = "From: $myemail\n";

    $headers .= "Reply-To: $email_address";

    if(mysqli_connect_error()){
        die('Connect Error('. mysqli_connect_errorno().')'.mysqli_connect());
    } else {
        //$sql="INSERT INTO contact_us (name, email, phone, company, industry, message) VALUES ('".$name."','".$email_address."', '".$phone."', '".$company."', '".$industry."', '".$message."')";
        $sql="INSERT INTO contact_us (name, email, phone, company, industry, message) VALUES (?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssss", $name, $email_address, $phone, $company, $industry, $message);
        $stmt->execute();
    }
  /*  if(!$result = $conn->query($sql)){
        echo "<script type='text/javascript'>alert(' There is a problem with the database connection');</script>";
        die('There was an error running the query [' . $conn->error . ']');
    } else {*/
        mail($to,$email_subject,$email_body,$headers);



        echo "<script type='text/javascript'>alert(' Contact details sent successfully');
                                          window.location.href='http://bbgi.co.za/contact.php';</script>";
    $stmt->close();
    $conn->close();
    //}

//redirect to the 'thank you' page

    //header('Location: /contact.php');

}
?>
