<?php
$error_nama = "";
$error_nim = "";
$error_jenisKelamin = "";

$nama=$_POST["nama"];
$nim=$_POST["nim"];
$jenisKelamin=$_POST["jenisKelamin"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["nama"])) {
        $error_nama = "nama tidak boleh kosong";
    }
    else {
        $nama = cek_input($_POST["nama"]);
    }
    if (empty($_POST["nim"])) {
        $error_nim = "nim tidak boleh kosong";
    }
    else {
        $nim = cek_input($_POST["nim"]);
    }
    if (empty($_POST["jenisKelamin"])) {
        $error_jenisKelamin = "jenis kelamin tidak boleh kosong";
    }
}  
function cek_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRAK202</title>
</head>
<body>
    <form action="" method="POST">
        Nama:   <input type="text" name="nama"  class="form-control" value="<?= cek_input($nama) ?>"><font color=red>*<span class="warning"><?php echo $error_nama; ?></span></font><br>
        Nim:    <input type="text" name="nim"   class="form-control" value="<?= cek_input($nim)  ?>"><font color=red>*<span class="warning"><?php echo $error_nim;  ?></span></font><br>
        
        Jenis Kelamin : <font color=red>*<span class="warning"><?php echo $error_jenisKelamin; ?></span></font><br>
        <input type="radio" name="jenisKelamin" value="Laki-laki" <?php if (isset($_POST["jenisKelamin"]) && $_POST["jenisKelamin"] == "Laki-laki") echo "checked";?>> Laki-Laki<br>
        <input type="radio" name="jenisKelamin" value="Perempuan" <?php if (isset($_POST["jenisKelamin"]) && $_POST["jenisKelamin"] == "Perempuan") echo "checked";?>> Perempuan<br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
    echo "$nama <br>";
    echo "$nim <br>";
    echo "$jenisKelamin";
?>