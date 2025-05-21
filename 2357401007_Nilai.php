<?php
$data = [
    ["nama" => "Asep", "nilai" => 78],
    ["nama" => "Icha", "nilai" => 89],
    ["nama" => "Shane", "nilai" => 45],
    ["nama" => "Jojo", "nilai" => 67],
    ["nama" => "Willy", "nilai" => 85],
    ["nama" => "Aby", "nilai" => 70],
    ["nama" => "Julie", "nilai" => 100],
    ["nama" => "Nate", "nilai" => 66],
    ["nama" => "Osi", "nilai" => 83]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai dan Grade</title>
</head>
<body>
    <h2>Nilai Mahasiswa</h2>
    <table border="1" cellpadding="8">
        <tr>
            <th>Nama</th>
            <th>Nilai</th>
            <th>Grade</th>
        </tr>
        <?php
        foreach ($data as $siswa) {
            $grade = "";

            if ($siswa["nilai"] >= 85) {
                $grade = "A";
            } elseif ($siswa["nilai"] >= 75) {
                $grade = "B";
            } elseif ($siswa["nilai"] >= 65) {
                $grade = "C";
            } elseif ($siswa["nilai"] >= 55) {
                $grade = "D";
            } else {
                $grade = "E";
            }

            echo "<tr>
                    <td>{$siswa['nama']}</td>
                    <td>{$siswa['nilai']}</td>
                    <td>$grade</td>
                  </tr>";
        }
        ?>
    </table>
</body>
</html>
