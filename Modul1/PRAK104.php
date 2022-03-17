<?php
$ListSamsung = ['Samsung Galaxy S22', 'Samsung Galaxy S22+', 'Samsung Galaxy A03', 'Samsung Galaxy Xcover 5'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Praktikum - no 4</title>
	
    <style>
        .Samsung {
            font-weight: bold;
        }
    </style>
	
</head>
<body>
<table border="1">
        <tr>
            <td class="Samsung">Daftar Smartphone Samsung</td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[0]; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[1]; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[2]; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[3]; ?></td>
        </tr>
    </table>
</body>
</html>
