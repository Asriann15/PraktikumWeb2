<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action= "" method="POST">
        <label for="nilai"> nilai : </label><input type="text" name="nilai" value="<?php $nilai ?>"><br>
        <button type="submit">konversi</button>
</body>
</html>

<?php
if(isset($_POST["nilai"])){
    $nilai=$_POST["nilai"];

    if($nilai<10){
        echo "nilai: $nilai<br>";
        echo "<h2> Hasil: Satuan </h2>";
    }elseif($nilai>10 && $nilai<20){
        echo "nilai: $nilai<br>";
        echo "<h2> Hasil: Belasan </h2>";
    }elseif($nilai==10 || $nilai>19 && $nilai<100){
        echo "nilai: $nilai<br>";
        echo "<h2> Hasil: Puluhan </h2>";
    }elseif($nilai>99 &&$nilai<1000){
        echo "nilai: $nilai<br>";
        echo "<h2> Hasil: Ratusan </h2>";
    }elseif($nilai==0){
        echo "nilai: $nilai<br>";
        echo "<h2> Hasil: Nol </h2>";
    }elseif($nilai>999){
        echo "nilai: $nilai<br>";
        echo "<h2> Anda Menginput Melebihi Limit Bilangan</h2>";
    }
}
?>