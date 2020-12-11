<?php

$service = $_POST['service'];

$company = $_POST['company'];

$industry = $_POST['industry'];

$servername = "localhost";
$dbUsername = "bbgicgch_admin";
$dbPassword = "Ch4ng31sg00d";
$dbname = "bbgicgch_bbgi";

    //create connection
    //$conn = mysqli_connect($servername, $dbUsername, $dbPassword, $dbname);

    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);

    if($conn->connect_error){
        die("Connection failed ". $conn->connect_error);
    }

    if(!empty($service) || !empty($company) || !empty($industry)){

    if(!empty($service)){
      $sql = "select * from suppliers where service like '%$service%'";
    }

    if(!empty($company)){
       $sql = "select * from suppliers where company like '%$company%'";
    }

    if(!empty($industry)){
       $sql = "select * from suppliers where industry like '%$industry%'";
    }

    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0){
         while ($row = mysqli_fetch_array($result))
              {
                $name = $row['name'];
                $surname = $row['surname'];
                $profession = $row['profession'];
                $company = $row['company'];
                $service = $row['service'];
                $industry = $row['industry'];
         }
    }

    if($result->num_rows > 0){
        while($row = $result->fetch_assoc()){
            echo $row["name"]." ".$row["surname"]." ".$row["profession"]."<br>";
            //echo "Returned from fetch "<br>";
        }
    } else {
        echo "0 records";
    }

    }

    $conn->close();

?>