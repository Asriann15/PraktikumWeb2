<?php
require('./Model.php');
if (isset($_GET['id_member'])) {
    hapusmember($_GET['id_member']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Member</title>
    <style>
        table{
        font-family: Times New Roman;
        background-color: #FFF8DC;
        border-collapse: collapse;
        border-style: dotted dashed solid double;
        border-align: center;
        border-color: #232323
        }
    </style>
</head>
<body>
    <a href="FormMember.php"><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Nama</th>
            <th>nomor_member</th>
            <th>alamat</th>
            <th>Tgl daftar</th>
            <th>tgl bayar</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("member") ?>
    </table>
</body>
</html>