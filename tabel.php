<?php
$nim    = "41037006241071";
$nama   = "APEP BAROKAH";
$prodi  = "Teknik Informatika";
$alamat = "Kp.Pasir Wangi, Desa.Singajaya, Kec.Cihampelas, Kab.Bandung Barat. Jawa Barat";
$telpon = "083829134978";
$hobby  = "Membaca & Menonton";
$quotes  = "Jika kau lapar, Makanlah ";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Data Mahasiswa</title>
    <style>
        table {
            width: 60%;
            border-collapse: collapse;
            margin: 30px 0;
            font-size: 18px;
        }
        table, th, td {
            border: 1px solid black;
        }
        td {
            padding: 10px;
        }
        .tabel {
            width: 25%;
            font-weight: bold;
        }
    </style>
</head>
<body>
<center>
<h2>Data Mahasiswa</h2>

<table>
    <tr>
        <td class="tabel">NIM :</td>
        <td><?php echo $nim; ?></td>
    </tr>
    <tr>
        <td class="tabel">Nama :</td>
        <td><?php echo $nama; ?></td>
    </tr>
    <tr>
        <td class="tabel">Prodi :</td>
        <td><?php echo $prodi; ?></td>
    </tr>
    <tr>
        <td class="tabel">Alamat :</td>
        <td><?php echo $alamat; ?></td>
    </tr>
    <tr>
        <td class="tabel">Telpon :</td>
        <td><?php echo $telpon; ?></td>
    </tr>
    <tr>
        <td class="tabel">Hobby :</td>
        <td><?php echo $hobby; ?></td>
    </tr>
    <tr>
        <td class="tabel">Quotes :</td>
        <td><?php echo $quotes; ?></td>
    </tr>
</table>
</center>

</body>
</html>