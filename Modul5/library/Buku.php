<?php
require('./Model.php');
if (isset($_GET['id_buku'])) {
    hapusbuku($_GET['id_buku']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku</title>
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
    <a href="FormBuku.php"><button>Tambah Data</button></a>
    <table border="1">
        <tr>
            <th>Judul Buku</th>
            <th>Penulis Buku</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <?= tampildata("buku") ?>
    </table>
</body>
</html>