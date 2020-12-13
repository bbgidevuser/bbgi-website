<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
//$q = intval($_GET['q']);
$q = $_GET['q'];
$serverName = "localhost";
$dbUsername = "bbgicgch_admin";
$dbPassword = "Ch4ng31sg00d";
$dbName = "bbgicgch_bbgi";

$service = $_POST['service'];

$company = $_POST['company'];

$industry = $_POST['industry'];

$con = mysqli_connect($serverName,$dbUsername,$dbPassword,$dbName);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,$dbName);
if($_SERVER['REQUEST_METHOD'] == "POST"){

$service = $_POST['service'];
$company = $_POST['company'];
$industry = $_POST['industry'];

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

//$sql="SELECT * FROM user WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>First Name</th>
<th>Last Name</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['name'] . "</td>";
  echo "<td>" . $row['surname'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>
}
}