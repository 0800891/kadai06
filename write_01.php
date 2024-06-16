<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$name  = $_POST['name'];
$email = $_POST['email'];
// $memo  = $_POST['memo'];
$address  = $_POST['address'];
if(isset($_POST['Structural_Design_Code'])){
    $code  = $_POST['Structural_Design_Code'];
    // echo $code;
}

$c = ',';
$str = $name . $c . $email . $c . $address . $c . $code . "\n"; //aaaa,bbbb,cccc
echo $str;
$arry = explode($c,$str);
var_dump($arry);
$file = fopen("data/data.csv","a");
fwrite($file, $str);
fclose($file);

// header('Location: index_01.php');
// exit;
?>