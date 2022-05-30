<?php
session_start();
if (!isset($_SESSION['nomor_member'])) {
    header("Location: ErrorPage.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Library</title>
    <style>
    h2{
        font-family: Times New Roman;
        text-decoration:none;
        color: #DC143C;
      }
      table{
        font-family: Times New Roman;
        background-color: #FFF8DC;
        border-collapse: collapse;
        border-style: dotted dashed solid double;
        border-align: center;
        border-color: #232323;
        text-align: center;
        width: 600px;
      }
    ul{
        text-decoration:none;
        color:#DC143C;
        font-size:1.8em;
        font-weight:700;
    }
    </style>
</head>
<body>
<h2>Selamat Datang : <?= $_SESSION["nama_member"] ?></h2>
    <table border="2">
        <th>Daftar Index Perpustakaan</th>
        <tr>
            <td><ul><li><a href="Member.php">Member</a></li><ul></td>
        </tr>
        <tr>
            <td><ul><li><a href="Buku.php">Buku</a></li><ul></td>
        </tr>
        <tr>
            <td><ul><li><a href="Peminjaman.php">Peminjaman</a></li><ul></td>
        </tr>
    
        <a href="Logout.php"><h2>Logout</h2></a>
</body>
</html>