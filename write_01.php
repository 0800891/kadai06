<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$name  = $_POST['name'];
$email = $_POST['email'];
$memo  = $_POST['memo'];
$c = ',';
$str = $name . $c . $email . $c . $memo . "\n"; //aaaa,bbbb,cccc
echo $str;
$file = fopen("data.csv","a");
fwrite($file, $str);
fclose($file);

header('Location: index_01.php');
exit;
?>