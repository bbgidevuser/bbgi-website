<?php
include('../config.php');
error_reporting(0);

if(isset($_POST['btnLogin']))
{
    $username = $_POST['username'];
    $password =MD5($_POST['password']);


    $sql="select id from admin where username='$username' and password='$password'";

    $result=mysql_query($sql);
    $row=mysql_fetch_array($result);

    $count=mysql_num_rows($result);
    $_SESSION['log_id']=$row['id'];
//$_SESSION['email']=$row['email'];

    if($_SESSION['log_id']==1)
    {

//echo "hii";
//header('location.href=contact.php');
        echo "<script>location.href='dashboard.php'</script>";

    }
    else
    {
        echo "<script>alert('Invalid email or password')</script>";
    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Admin</title>

    <!-- Bootstrap -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="assets/fontawesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="assets/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="assets/css/animate.min.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="assets/css/custom.min.css" rel="stylesheet">
</head>
<body class="login">
<div>
    <div class="login_wrapper">
        <div class="animate form login_form">
            <section class="login_content">
                <form method="post" action="" enctype="multipart/form-data">
                    <img src="../img/transparent.png" width="255px" style="padding-bottom:30px">

                    <div>
                        <input type="text" class="form-control" name="username" placeholder="Username" required>
                    </div>
                    <div>
                        <input type="password" class="form-control" name="password" placeholder="Password" required>
                    </div>

                    <div style="margin-left:0px;">
                        <input type="submit" class="btn btn-default submit" name="btnLogin" value="Sign In">
                    </div>

                    <div class="clearfix"></div>
                </form>
                <div class="separator">

                    <div class="clearfix"></div>
                    <br />

                    <div>
                        <p>&copy;2020 All Rights Reserved.</p>
                    </div>
                </div>

            </section>
        </div>
    </div>
</div>
</body>
</html>
