<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="write_01.php" method="post">
    構造設計者名:<input type="text" name="name"><br>
    建物名称:<input type="text" name="email"><br>
        <!-- Note:<textarea name="memo" cols='30' rows='10' id=""></textarea> -->
        住所:<input type="text" name='address'></textarea><br>
            <select name="Structural Design Code" id="design_code">
              <option value="">設計基準を選んでください</option>
              <option value="Japanese_Code">Japanese_Code</option>
              <option value="American_Code">American_Code</option>
              <option value="Euro_Code">Euro_Code</option>
            </select>            
            <p id="img_text">登録したい画像のファイルを選択してください</p>
            <input type="file" id="imgUpload">
        <button type='submit'>send</button>
        <!-- <input type="submit" value='send'> -->
    </form>
</body>
</html>