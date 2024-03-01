<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Form</title>
    <style type="text/css">
        .bungkus{
            border: 1px solid;
            border-radius: 10px;
            width: 400px;
            height: 130px;
            padding-left: 5px;
            padding-top: 5px;
            margin: auto;
            margin-top: 130px;
            background-color: darksalmon;
            font-family: sans-serif;
        }
        .klik{
            float: 5px;
            margin-left: 4px;
            margin-top: 10px;
            width: 100px;
        }
        .d{
            margin-top: 7px;
            height: 16px;
            border-radius: 10px;
          
        }
       
    </style> 
</head>
<body>
    <div class="bungkus">
        <form name="input1" method="post" action="#" targe="_self" enctype="multipart/form-data"> 
            

            <label class="d">Masukkan Nama Anda : </label>
            <input type="text" name="nama" class="d"><br>

            <label class="d"> Masukkan Alamat Anda :  </label>
            <input type="text" name="alamat" class="d"><br>

            <label class="d"> Masukkan Umur Anda :  </label>
            <input type="text" name="umur" class="d"><br>

            <input type="submit" name="submit" value="kirim" class="klik">



        </form>
    </div>
    
</body>
</html>
<?php
$nama = "";
$alamat = "";
$umur = "0";
if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $nama = anti_inject($_POST['nama']);
    $alamat = anti_inject($_POST['alamat']);
    $umur = anti_inject($_POST['umur']);


}

function anti_inject($data){
    $data = trim($data);  //mengahapus spasi kosong di kanan dan kiri data//
    $data = stripslashes($data); //menghilangkan karakter//
    $data = htmlspecialchars($data);//tidak mengizinkan karakter lain/ menghilangkan simbol karakter khusus//

    $data = preg_replace("/[^ a-zA-Z0-9]/", "", $data);

    return $data;

}

echo "Nama Kamu   : ".$nama."<br>";
echo "Alamat Kamu : ".$alamat."<br>";
echo "Umur Kamu : ".$umur." ";


?>
