<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK301</title>
</head>
<body>
    <form action="" method="post">
        <label for="peserta">Jumlah Peserta: 
        <input type="text" name="peserta"></br>
        <input type="submit" value="cetak"></label>
    </form>
</body>
</html>

<?php
    $peserta = !empty($_POST['peserta']) ? $_POST['peserta'] : '';
    $x=1;
    while ($x <= $peserta) {
        
        if ($x % 2 == 0) {
            echo "<h2><font color='green'></br>Peserta ke - $x</font></h2>";
        }else {
            echo "<h2><font color='red'></br>Peserta ke - $x</font></h2>";
        }
        $x++;
    }
?>