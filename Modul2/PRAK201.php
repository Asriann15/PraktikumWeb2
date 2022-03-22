<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="i-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK201</title>
</head>
<body>
    <form action="" method="POST">
        Nama 1 : <input type ="text" name= "nama[]"></input><br>
        Nama 2 : <input type ="text" name= "nama[]"></input><br>
        Nama 3 : <input type ="text" name= "nama[]"></input><br>
        <button type="submit">Urutkan</button>
    </form>
</body>
</html>

<?php
    if(isset($_POST["nama"])){
        $nama=$_POST["nama"];

        $array= count($nama);
        for ($i=0; $i<$array; $i++){
            for ($n=$i+1; $n<$array; $n++){
                if($nama[$i] > $nama[$n]){
                    $namaA      = $nama[$i];
                    $nama[$i]   = $nama[$n];
                    $nama[$n]   = $namaA;
                }
            }
        }
        foreach ($nama as $nama => $hasil) {
            echo "$hasil <br>";
        }
    }   
?>