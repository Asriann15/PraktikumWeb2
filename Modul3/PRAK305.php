<?php
    $kata = null;

    if (isset($_POST['kata'])) {
        $kata = $_POST['kata'];
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
        <input type="text" name="kata">
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
        if(isset($_POST['submit'])) {
            $lenght = strlen($kata);
            $split = str_split($kata);

            echo"<h2>Input :</h2>";
            echo"$kata";
            echo"<h2>Output :</h2>";
            
            $x=0;

            while($x < $lenght) {
                echo strtoupper($split[$x]);

                $i=1;
                while($i < $lenght) {
                    echo strtolower($split[$x]);
                    $i++;
                }
                $x++;
            }
        }
    ?>
</body>
</html>