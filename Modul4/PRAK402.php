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
        "Nama" => "Andi",
        "NIM" => "2101001",
        "Nilai UTS" => "87",
        "Nilai UAS" => "65"
        ],
        [
        "Nama" => "Budi",
        "NIM" => "2101002",
        "Nilai UTS" => "76",
        "Nilai UAS" => "79"
        ],
        [
        "Nama" => "Tono",
        "NIM" => "2101003",
        "Nilai UTS" => "50",
        "Nilai UAS" => "41"
        ],
        [
        "Nama" => "Jessica",
        "NIM" => "2101004",
        "Nilai UTS" => "60",
        "Nilai UAS" => "70"
        ]
    ];

    function HitungNilai($uts, $uas){
        $uts *= 0.4;
        $uas *= 0.6;
        return $uts + $uas;
    }

    function KonversiNilai($HasilNilai){
        if($HasilNilai >= 80){
            return "A";
        }
        else if($HasilNilai >= 70){
            return "B";
        }
        else if($HasilNilai >= 60){
            return "C";
        }
        else if($HasilNilai >= 50){
            return "D";
        }
        else{
            return "E";
        } 
    }

    for ($i = 0; $i < count($mahasiswa); $i++){
        $mahasiswa[$i]["Nilai Akhir"] = HitungNilai($mahasiswa[$i]["Nilai UTS"], $mahasiswa[$i]["Nilai UAS"]);
        $mahasiswa[$i]["Konversi Nilai"] = KonversiNilai($mahasiswa[$i]["Nilai Akhir"]);
    }

    echo "<table>";
echo "<tr>";
foreach ($mahasiswa[0] as $key => $value) {
    echo "<th>" . $key . "</th>";
}
echo "</tr>";
foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    foreach ($mhs as $key => $value) {
        echo "<td>" . $value . "</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
</body>
</html>