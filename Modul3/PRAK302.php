<?php
$tinggi = 0;
$link = "";

    if(isset($_POST["tinggi"])){
     $tinggi = $_POST["tinggi"];
    }

    if(isset($_POST["gambar"])){
     $link = $_POST["gambar"];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form action="" method="post">
    
    <label for="tinggi">Masukkan Tinggi : </label>
    <input type="text" name="tinggi"><br>
    <label for="gambar">Alamat Gambar : </label>
    <input type="text" name="gambar"><br>
    <button type="submit" name="submit">Submit</button></br>

    </form>

    <table>

    <?php
            $i = 1;
            while($i <= $tinggi){
                $j = 1;
                ?><tr><?php
                while($j <= $tinggi){
                    if($i <= $j){
                        ?><td><?php echo "<img src='$link' width='40px' height='40px'>";?></td><?php
                    }
                    else{
                        ?><td><?php echo ""; ?></td><?php
                    }
                    $j++;
                }
                echo "<br>";
                $i++;
                ?></tr><?php
            }
    ?>
    
    </table>

</body>
</html>