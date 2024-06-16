<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

$name  = $_POST['name'];
$email = $_POST['email'];
// $memo  = $_POST['memo'];
$address  = $_POST['address'];
if(isset($_POST['Structural_Design_Code'])){
    $code  = $_POST['Structural_Design_Code'];
    // echo $code;
}
$img_src = $_POST['img_src'];

$c = ',';
$str = $name . $c . $email . $c . $address . $c . $code . $c . $img_src . "\n"; //aaaa,bbbb,cccc
echo $str;
$arry = explode($c,$str);
var_dump($arry);
$file = fopen("data/data.csv","a");
fwrite($file, $str);
fclose($file);

header('Location: read.php');
exit;
?>