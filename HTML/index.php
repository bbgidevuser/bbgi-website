<?php ?>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Black Business Growth Initiative</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="" name="author"/>
    <link rel="icon" type="image/png" href="coming-soon/images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="coming-soon/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="coming-soon/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="coming-soon/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="coming-soon/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="coming-soon/css/util.css">
    <link rel="stylesheet" type="text/css" href="coming-soon/css/main.css">
</head>
<body>
<?php include('coming-soon/coming-soon.php'); ?>
<!--===============================================================================================-->
<script src="coming-soon/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="coming-soon/vendor/bootstrap/js/popper.js"></script>
<script src="coming-soon/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="coming-soon/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="coming-soon/vendor/countdowntime/moment.min.js"></script>
<script src="coming-soon/vendor/countdowntime/moment-timezone.min.js"></script>
<script src="coming-soon/vendor/countdowntime/moment-timezone-with-data.min.js"></script>
<script src="coming-soon/vendor/countdowntime/countdowntime.js"></script>
<script>
    $('.cd100').countdown100({
        /*Set Endtime here*/
        /*Endtime must be > current time*/
        endtimeYear: 2021,
        endtimeMonth: 1,
        endtimeDate: 29,
        endtimeHours: 9,
        endtimeMinutes: 0,
        endtimeSeconds: 0,
        timeZone: ""
        // ex:  timeZone: "America/New_York"
        //go to " http://momentjs.com/timezone/ " to get timezone
    });
</script>
<!--===============================================================================================-->
<script src="coming-soon/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="coming-soon/js/main.js"></script>
</body>
</html>

