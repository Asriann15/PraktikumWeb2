<?php require('./Model.php');
if (isset($_GET['id_peminjaman'])) {
    editpeminjaman();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
    <?php echo (isset($_GET['id_peminjaman'])) ? "<title>Update Data | Peminjaman</title>" : "<title>Tambah Data | Peminjaman</title>" ?>
</head>

<body>
    <form action="" method="post">
        <table>

            <tr>
                <td>
                    Tanggal Peminjaman
                </td>
                <td>
                    <input type="date" name="tgl_pinjam" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_pinjam"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Tanggal Kembali
                </td>
                <td>
                    <input type="date" name="tgl_kembali" <?php echo (isset($_GET['id_peminjaman'])) ?  "value = " . $result[0]["tgl_kembali"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Id Member
                </td>
                <td>
                    <input type="text" name="id_member" <?php echo (isset($_GET['id_member'])) ?  "value = " . $result[0]["id_member"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>
            <tr>
                <td>
                    Id Buku
                </td>
                <td>
                    <input type="text" name="id_buku" <?php echo (isset($_GET['id_buku'])) ?  "value = " . $result[0]["id_buku"] . "" : "value = '' "; ?> required> <br>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <?php
                    if (isset($_GET['id_peminjaman'])) {
                        echo "<button type=\"submit\" name=\"update\">Update</button>";
                    } else {
                        echo "<button type=\"submit\" name=\"submit\">Tambah</button>";
                    }

                    ?>
                </td>
            </tr>
        </table>
    </form>
    <?php
    if (isset($_POST['submit'])) {

        tambahdatapeminjaman($_POST['tgl_pinjam'], $_POST['tgl_kembali'],$_POST['id_member'], $_POST['id_buku']);
    }
    if (isset($_POST['update'])) {
        updatepeminjaman($_GET['id_peminjaman'], $_POST['tgl_pinjam'], $_POST['tgl_kembali'], $_POST['id_member'], $_POST['id_buku']);
    }
    ?>
</body>

</html>