<?php
    $bAtas=null;
    $bBawah=null;
    

    if(isset($_POST['bAtas'])){
        $bAtas = $_POST['bAtas'];
    }

    if(isset($_POST['bBawah'])){
        $bBawah = $_POST['bBawah'];
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
        <label for="bBawah">Batas Bawah : </label>
        <input type="text" name="bBawah"><br>
        <label for="bAtas">Batas Atas : </label>
        <input type="text" name="bAtas"><br>
        <button type="submit" name="submit">Submit</button></br>
    </form>

    <?php
        do{
            if(($bBawah + 7) % 5 == 0){
                echo "<img src='star.png' width='20px' height='20px'> ";
            }else{
                echo "$bBawah ";
            }
            $bBawah++;
        }while($bBawah <= $bAtas);
    ?>
</body>
</html>