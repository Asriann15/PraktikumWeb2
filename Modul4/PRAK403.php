<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
       
       table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 5px;
            text-align: left;
        }

        th {
            background-color: #ccc;
        }
    </style>
</head>
<body>
<?php

$mahasiswa = [
    [
        "No" => 1,
        "Nama" => "Ridho",
        "Mata Kuliah diambil" => [
            "Pemrograman I", 
            "Praktikum Pemrograman I",
            "Pengantar Lingkungan Lahan Basah", 
            "Arsitekur Komputer"
        ],
        "SKS" => [2, 1, 2, 3]
    ],
    [
        "No" => 2,
        "Nama" => "Ratna",
        "Mata Kuliah diambil" => [
            "Basis Data I", 
            "Praktikum Basis Data I",
            "Kalkulus"
        ],
        "SKS" => [2, 1, 3]
    ],
    [
        "No" => 3, 
        "Nama" => "Tono",
        "Mata Kuliah diambil" => [
            "Rekayasa Perangkat Lunak", 
            "Analsis dan Perancangan Sistem",
            "Komputasi Awan", 
            "Kecerdasan Bisnis"
        ],
        "SKS" => [3, 3, 3, 3]
    ]
];

function hitungSKS($mataKuliah)
{
    $jumlahSKS = 0;
    foreach ($mataKuliah as $key => $value) {
        $jumlahSKS += $value;
    }
    return $jumlahSKS;
}

function keterangan($sks)
{
    if ($sks < 7)
        return "Revisi KRS";
    else
        return "Tidak Revisi";
}

for ($i = 0; $i < count($mahasiswa); $i++) {
    $mahasiswa[$i]['Total SKS'] = hitungSKS($mahasiswa[$i]["SKS"]);
    $mahasiswa[$i]['Keterangan'] = keterangan($mahasiswa[$i]['Total SKS']);
}

function buatTabel($mhs, $i)
{
    echo "<tr>";
    foreach ($mhs as $value) {
        if (!is_array($value)) {
            echo "<td>";
            echo "</td>";
        } else {
            if (isset($value[$i])) {
                echo "<td>";
                echo $value[$i];
                echo "</td>";
            }
        }
    }
    echo "</tr>";
}

echo "<table>";
echo "<tr>";
foreach ($mahasiswa[0] as $key => $value) {
    echo "<th>" . $key . "</th>";
}
echo "</tr>";
foreach ($mahasiswa as $mhs) {
    $i = 0;
    echo "<tr>";
    foreach ($mhs as $value) {
        if (!is_array($value)) {
            if ($value == "Tidak Revisi")
                echo "<td style='background-color: #00ff00;'>" . $value . "</td>";
            else if ($value == "Revisi KRS")
                echo "<td style='background-color: #ff0000;'>" . $value . "</td>";
            else
                echo "<td>" . $value . "</td>";
        } else {
            echo "<td>";
            echo $value[0];
            echo "</td>";
        }
    }
    echo "</tr>";
    for ($j = 1; $j < count($mhs["Mata Kuliah diambil"]); $j++) {
        buatTabel($mhs, $j);
    }
}
echo "</table>";

?>
</body>
</html>