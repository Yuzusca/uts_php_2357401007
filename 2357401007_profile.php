<?php
$profil = [
    "NIS" => "2357401007",
    "Nama" => "Yusuf Hidayat",
    "Kelas" => "MI23",
    "Jenis Kelamin" => "Laki-laki",
    "Email" => "yusuff.hdytt@gmail.com",
    "Nomor Handphone" => "08990977867"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Profil Diri</title>
</head>
<body>
    <h1>Profil Mahasiswa</h1>
    <table border="1" cellpadding="8">
        <?php
        foreach ($profil as $key => $value) {
            echo "<tr><td><strong>$key</strong></td><td>$value</td></tr>";
        }
        ?>
    </table>
</body>
</html>
