<?php

$panjang = null;
$lebar = null;
$nilai = null;
$explod = null;

if(isset($_POST['submit'])){
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];
    $nilai = $_POST['nilai'];
    
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
        Panjang : <input type="text" name="panjang"><br>
        Lebar : <input type="text" name="lebar"><br>
        Nilai : <input type="text" name="nilai"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>
    <table border="1">
    <?php
        if(isset($_POST['submit'])){

            if(!empty($nilai)){

                $explod = explode(" ",$nilai);
                $count = count($explod);
                $x=0;
            
                for($i=0; $i< $panjang; $i++){
                    echo "<tr>";
                    for($j=0; $j< $lebar; $j++){
                        echo "<td>".$explod[$x]."</td>";
                        $x++;
                    }
                    echo "</tr>";
                }
            }
            else if($count > $panjang*$lebar){
                echo "Panjang nilai tidak sesuai dengan ukuran matriks";
            }
        }
    ?>
    </table>
</body>
</html>