<?php
    $bintang = null;
    
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(isset($_POST['bintang'])){
            $bintang = $_POST['bintang'];
        }
    }

    if(isset($_POST["tambah"])){
            $bintang++;
        }
    else if(isset($_POST["kurang"])){
            $bintang--;
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>

</head>
<body>
<?php

    if(empty($bintang)){ ?>

    <form action="" method="post">
    <label for="bintang">Jumlah Bintang</label> 
    <input type="number" name="bintang"><br>
    <button type="submit">Submit</button>
    </form>
    <?php
    }

    if(isset($_POST['bintang']) and $bintang != 0){
        echo "Jumlah Bintang : $bintang<br>";
        $i=1;
        do{
            echo "<img src='star.png' width='20px' height='20px'>";
            $i++;
        }while($i <= $bintang);
    }

    if(!empty($bintang)){
    ?>  <form action="" method="post">
            <button name="tambah">Tambah</button>
            <input type="hidden" name="bintang" value="<?= $bintang?>"/>
            <button name="kurang">Kurang</button>
            </form>
    <?php
    }
    ?>
</body>
</html>