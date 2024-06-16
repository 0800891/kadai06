<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <form action="write_01.php" method="post"> -->
    構造設計者名:<input type="text" name="name" id='name'><br>
    建物名称:<input type="text" name="email" id='text_building_name'><br>
        <!-- Note:<textarea name="memo" cols='30' rows='10' id=""></textarea> -->
        住所:<input type="text" name='address' id='address'></textarea><br>
        設計基準： <select name="Structural_Design_Code" id="design_code">
              <option value="">設計基準を選んでください</option>
              <option value="Japanese_Code">Japanese_Code</option>
              <option value="American_Code">American_Code</option>
              <option value="Euro_Code">Euro_Code</option>
            </select>            
            <p id="img_text">登録したい画像のファイルを選択してください</p>
            <input type="file" id="imgUpload"><br>
            <!-- <button type='submit'>send</button><br> -->
        <!-- <input type="submit" value='send'> -->
        <button id="send">送信</button>
    <!-- </form> -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    
    // const img =  $("#imgUpload").val();

    
    
    // const uploadPhotoButton = document.querySelector('#imgUpload');
    // uploadPhotoButton.addEventListener("change", function() {        
    //         let file = uploadPhotoButton.files[0]; //読み込んだファイルを格納
    //         const reader = new FileReader(); //ファイル読み込みのためのオブジェクトのインスタンス化
    //         reader.onload = () => { 
    //         console.dir(file);        //onload 読み込みが終わったときに発火する
    //         let photo_0 = reader.result;  //読み込んだ画像ファイルを格納
    //         // localStorage.setItem('dataURLimg', photo); //localstorageに保存
    //         console.log(photo_0);
    //             }
    //         reader.readAsDataURL(file);     //アップロードファイルのDataURL化
    //     });

    $("#send").on("click",function(){
        let name =  $("#name").val();
        let text_building_name = $("#text_building_name").val();
        let address = $("#address").val();
        let selectElement = document.getElementById("design_code");;
        let design_code = selectElement.value;


        

        let xhr = new XMLHttpRequest();
         xhr.open('POST','./write.php',true);
        xhr.responseType = 'text';//'text','json','arraybuffer','document','blob'
        let fd = new FormData();
        fd.append("name",name);
        console.log(name,'name');
        fd.append("email",text_building_name);

        console.log(text_building_name,'text_building_name');
        fd.append("address",address);

        fd.append("Structural_Design_Code",design_code);

        console.log(design_code,'Design_code');

        const reader = new FileReader(); //ファイル読み込みのためのオブジェクトのインスタンス化
        const uploadPhotoButton = document.querySelector('#imgUpload');
        let file = uploadPhotoButton.files[0];
        reader.readAsDataURL(file)
          reader.onload = function(){ 
           console.dir(file);        //onload 読み込みが終わったときに発火する
           
           let photo = reader.result;  //読み込んだ画像ファイルを格納
           let img_src = photo;
           
           fd.append("img_src",img_src);
           console.log(img_src);

        xhr.send(fd);}
        reader.onerror = function() {
             console.log(reader.error);
            };
    })
   
    </script>
</html>