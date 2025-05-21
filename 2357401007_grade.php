<?php
$data = [
    ["nama" => "Asep", "grade" => "A"],
    ["nama" => "Icha", "grade" => "A"],
    ["nama" => "Shane", "grade" => "C"],
    ["nama" => "Jojo", "grade" => "D"],
    ["nama" => "Willy", "grade" => "A"],
    ["nama" => "Aby", "grade" => "B"],
    ["nama" => "Julie", "grade" => "E"],
    ["nama" => "Nate", "grade" => "B"],
    ["nama" => "Osi", "grade" => "C"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Grade Mahasiswa</title>
</head>
<body>
    <h2>Grade dan Keterangan</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>Grade</th>
            <th>Keterangan</th>
        </tr>
        <?php
        foreach ($data as $siswa) {
            $keterangan = "";

            switch ($siswa["grade"]) {
                case "A": $keterangan = "Sangat Baik"; break;
                case "B": $keterangan = "Baik"; break;
                case "C": $keterangan = "Cukup"; break;
                case "D": $keterangan = "Kurang"; break;
                case "E": $keterangan = "Buruk"; break;
                default: $keterangan = "Tidak Diketahui";
            }

            echo "<tr>
                    <td>{$siswa['nama']}</td>
                    <td>{$siswa['grade']}</td>
                    <td>$keterangan</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
