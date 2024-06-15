<?php
// ファイルを開く
$data = file_get_contents('data/data.txt');

echo nl2br($data);
// ファイル内容を1行ずつ読み込んで出力

// ファイルを閉じる
