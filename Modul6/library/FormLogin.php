<?php
session_start();
include 'Koneksi.php';
if (isset($_SESSION['nomor_member'])) {
    header("Location: Index.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        table{
        font-family: Times New Roman;
        background-color: #FFF8DC;
        border-collapse: collapse;
        border-style: dotted dashed solid double;
        border-align: center;
        border-color: #232323
        }
        tr{
        font-family: Times New Roman;
        text-decoration:none;
        color: #DC143C;
      }
    </style>
</head>

<body>
    <table>
        <form action="Login.php" method="POST">
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor_member" autofocus required></td>
            </tr>
            <tr>
                <td>password</td>
                <td><input type="password" name="passwd" required></td>
            </tr>
            <tr>
                <td></td>

                <td><button type="submit" name="login">Submit</button></td>
            </tr>
        </form>
    </table>
</body>


</html>