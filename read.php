<?php
// ファイルを開く
$data = file_get_contents('data/data.csv');

$arry = explode(",",$data);
$arry_chunk = array_chunk($arry,4);
var_dump($arry_chunk[0]);
foreach ($arry_chunk[0] as $val) {
    echo "<td>" . $val . "</td>";
  }

  $img_data = base64_decode($arry_chunk[1]);
  $type = finfo_buffer(finfo_open(), $img_data, FILEINFO_EXTENSION);
  var_dump($type); 
// ファイル内容を1行ずつ読み込んで出力

// ファイルを閉じる
?>