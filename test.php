<?php

date_default_timezone_set('Europe/Bucharest');
error_reporting(E_ALL);
ini_set('display_errors', '1');

//Save to order log function
function f($array) {
    $dataToLog = $array;
    $data = $dataToLog;
    $data .= PHP_EOL;
    $pathToFile = $_SERVER['DOCUMENT_ROOT']."/logs/t.log";
    $success = file_put_contents($pathToFile, $data, FILE_APPEND);
    if ($success === TRUE){
      echo "log saved";
    }
  }

$action = $_POST['action_type'];
$product_codename = $_POST['product_codename'];
$customer_emailaddress = $_POST['customer_emailaddress'];
$customer_phone = $_POST['customer_phone'];

isset($_POST['action_type']) ? $action = $_POST['action_type'] : $action = "NONE";


isset($_POST['subid3']) ? $subid3 = $_POST['subid3'] : $subid3 = "";
isset($_POST['subid4']) ? $subid4 = $_POST['subid4'] : $subid4 = "";
isset($_POST['subid5']) ? $subid5 = base64_decode($_POST['subid5']) : $subid5 = "";
#$ = $_POST[''];
#$ = $_POST[''];
#$ = $_POST[''];


$save = $action. " | " .$product_codename. " | " .$customer_emailaddress. " | " .$customer_phone. " | " .$subid3. " | " .$subid4. " | " .$subid5;

if($action != "NONE"){
    f($save);
    echo $save;
}
  ?>