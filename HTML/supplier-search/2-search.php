<?php
// (1) DATABASE CONFIG
// ! CHANGE THESE TO YOUR OWN !
define('DB_HOST', 'localhost');
define('DB_NAME', 'bbgicgch_bbgi');
define('DB_CHARSET', 'utf8');
define('DB_USER', 'bbgicgch_admin');
define('DB_PASSWORD', 'Ch4ng31sg00d');

// (2) CONNECT TO DATABASE
try {
  $pdo = new PDO(
    "mysql:host=" . DB_HOST . ";charset=" . DB_CHARSET . ";dbname=" . DB_NAME,
    DB_USER, DB_PASSWORD, [ PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES => false ]
  );
} catch (Exception $ex) {
  die($ex->getMessage());
}

// (3) SEARCH
if($_SERVER['REQUEST_METHOD'] == "POST"){

    $service = $_REQUEST['service'];
    $industry = $_REQUEST['industry'];
    $company = $_REQUEST['company'];
    //$name = $_REQUEST['name'];

    if(!empty($service)){
        $stmt = $pdo->prepare("SELECT name, surname, phone, company, service, industry FROM `suppliers` WHERE `service` LIKE :service");
        $stmt->bindParam(':service', $service);
        $stmt->execute();
        $results = $stmt->fetchAll();
    }

    if(!empty($industry)){
        $stmt = $pdo->prepare("SELECT name, surname, phone, company, service, industry FROM `suppliers` WHERE `industry` LIKE :industry");
        $stmt->bindParam(':industry', $industry);
        $stmt->execute();
        $results = $stmt->fetchAll();
    }

    if(!empty($company)){
        $stmt = $pdo->prepare("SELECT name, surname, phone, company, service, industry FROM `suppliers` WHERE `company` LIKE :company");
        $stmt->bindParam(':company', $company);
        $stmt->execute();
        $results = $stmt->fetchAll();
    }

    /*if(!empty($name)){
        $stmt = $pdo->prepare("SELECT * FROM `suppliers` WHERE `name` LIKE :name");
        $stmt->bindParam(':name', $name);
        $stmt->execute();
        $results = $stmt->fetchAll();
    }*/
}
if($results){
    if (isset($_POST['ajax'])) { echo json_encode($results); }
} else {
    $results = [];
}

