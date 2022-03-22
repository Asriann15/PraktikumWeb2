<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK203</title>

</head>
<body>
<form action="" method="POST">
    <label for="nilai">Nilai : </label><input type="text" name="nilai"><br>
    <br>
    <label for="suhuDari"> Dari : <br></label>
    <input type="radio" name="suhuDari" value="Celcius"<?php if(isset($_POST["suhuDari"]) && $_POST["suhuDari"] == "Celcius")echo "checked"; ?>> Celcius<br>
    <input type="radio" name="suhuDari" value="Fahrenheit"<?php if(isset($_POST["suhuDari"]) && $_POST["suhuDari"] == "Fahrenheit")echo "checked"; ?>> Fahrenheit<br>
    <input type="radio" name="suhuDari" value="Reamur"<?php if(isset($_POST["suhuDari"]) && $_POST["suhuDari"] == "Reamur")echo "checked"; ?>> Reamur<br>
    <input type="radio" name="suhuDari" value="Kelvin"<?php if(isset($_POST["suhuDari"]) && $_POST["suhuDari"] == "Kelvin")echo "checked"; ?>> Kelvin<br>


    <label for="suhuKonv"> Ke : <br></label>
    <input type="radio" name="suhuKonv" value="Celcius"<?php if(isset($_POST["suhuKonv"]) && $_POST["suhuKonv"] == "Celcius")echo "checked"; ?>> Celcius<br>
    <input type="radio" name="suhuKonv" value="Fahrenheit"<?php if(isset($_POST["suhuKonv"]) && $_POST["suhuKonv"] == "Fahrenheit")echo "checked"; ?>> Fahrenheit<br>
    <input type="radio" name="suhuKonv" value="Reamur"<?php if(isset($_POST["suhuKonv"]) && $_POST["suhuKonv"] == "Reamur")echo "checked"; ?>> Reamur<br>
    <input type="radio" name="suhuKonv" value="Kelvin"<?php if(isset($_POST["suhuKonv"]) && $_POST["suhuKonv"] == "Kelvin")echo "checked"; ?>> Kelvin<br>
    <br>
    <button type="submit">konversi</button>
    <br>
    <h2 style="padding-top: 10px;">Hasil Konversi : <?php echo konv() ?> </h2>

</form>
</body>
</html>

<?php
function konv(){
    $hasil = null;
    $nilai = $_POST["nilai"];
    $suhuDari = $_POST["suhuDari"];
    $suhuKonv = $_POST["suhuKonv"];
    if($suhuDari=="Celcius" && $suhuKonv == "Fahrenheit"){
        $hasil = 9/5 * $nilai + 32;
        return "$hasil °F";
    }elseif($suhuDari == "Celcius" && $suhuKonv == "Reamur"){
        $hasil = 4/5 * $nilai;
        return "$hasil °R";
    }elseif($suhuDari == "Celcius" && $suhuKonv == "Kelvin"){
        $hasil = $nilai + 273.15;
        return "$hasil °K";
    }elseif($suhuDari == "Fahrenheit" && $suhuKonv == "Celcius"){
        $hasil = 5/9 * ($nilai - 32);
        return "$hasil °C";
    }elseif($suhuDari == "Fahrenheit" && $suhuKonv == "Reamur"){
        $hasil = 4/9*($nilai-32);
        return "$hasil °R";
    }elseif($suhuDari == "Fahrenheit" && $suhuKonv == "Kelvin"){
        $hasil = 5/9*($nilai-32)+273.15;
        return "$hasil °K";
    }elseif($suhuDari == "Reamur" && $suhuKonv == "Celcius"){
        $hasil = 5/4*$nilai;
        return "$hasil °C";
    }elseif($suhuDari == "Reamur" && $suhuKonv == "Fahrenheit"){
        $hasil = 9/4*$nilai+32;
        return "$hasil °F";
    }elseif($suhuDari == "Reamur" && $suhuKonv == "Kelvin"){
        $hasil = 5/4*$nilai+273.15;
        return "$hasil °K";
    }elseif($suhuDari == "Kelvin" && $suhuKonv == "Celcius"){
        $hasil = $nilai - 273.15;
        return "$hasil °C";
    }elseif($suhuDari == "Kelvin" && $suhuKonv == "Fahrenheit"){
        $hasil = 4/5*($nilai-273.15);
        return "$hasil °F";
    }elseif($suhuDari == "Kelvin" && $suhuKonv == "Reamur"){
        $hasil = 9/5*($nilai - 273.15)+32;
        return "$hasil °R";
    }else{
        return "$nilai";
    }
}
?>