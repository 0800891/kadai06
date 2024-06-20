<?php
// ファイルを開く
$data = file_get_contents('data/data.csv');

$arry = explode('"',$data);
$arry_chunk = array_chunk($arry,5);
// var_dump($arry_chunk);
$cnt = count($arry_chunk);
// echo $cnt ."\n";
// for(i=0;i<)
// foreach ($arry_chunk as $val) {
//     echo "<td>" . $val . "</td><br>";
//   }


//   $img_data = base64_decode($arry_chunk[0][5]);
// Base64エンコードされた画像データ
$d = "'";
// $base64_image =[];
// $base64_image =$d . $arry_chunk[0][4] . $arry_chunk[0][5] . $d ;
for($i = 0; $i<1;$i++){
// $base64_image = $d. $arry_chunk[$i][4] .','. $arry_chunk[$i][5] . $d ;
$base64_image = $d. $arry_chunk[$i][4] . $d ;
// echo $base64_image;
}
$base64_image_count = count($arry_chunk);
$json_array_chunk = json_encode($arry_chunk);

// echo $base64_image;
 ?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>Base64画像表示サンプル</title>
</head>
<body>
    <h1>Base64デコードされた画像を表示する</h1>
    <!-- サーバーに保存した画像ファイルを表示 -->
    
    <div id="output"></div>
    <button id="show">show</button>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>

const base64ImageCount = <?php echo $base64_image_count; ?>;
console.log(base64ImageCount);
const arrayChunk = <?php echo $json_array_chunk; ?>;
$("#show").on("click", function(){
    for (let i = 0; i < base64ImageCount; i++) {
        let text_00 = arrayChunk[i][0];
        let text_01 = arrayChunk[i][1];
        let text_02 = arrayChunk[i][2];
        let text_03 = arrayChunk[i][3];
        let img = arrayChunk[i][4] + ',' + arrayChunk[i][5];
        console.log(i); // 画像情報を処理

        let html=`
        <div class="msg",id=${text_00}>
        <p>${text_00}</p>
        <p>${text_01}</p>
        <p>${text_02}</p>
        <p>${text_03}</p>
        <img src= ${img} alt="デコードされた画像">
        </div>
        `
   // #outputの最後に追加
    $('#output').append(html);
    }


})

</script>
</html>