<?php
if( !isset($_GET["merk"]) ||
    !isset($_GET["warna"]) ||
    !isset($_GET["jenis"]) || 
    !isset($_GET["tahun"]) ||
    !isset($_GET["harga"])) {
    //reirect
    header("Location: latihan2.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Detail Harga Mobil</title>
</head>
<body>

<ul><li><img src="img/<?= $_GET["gambar"]; ?>"></li></ul>
<li>Merk Kendaraan :<?= $_GET["merk"]; ?></li>
<li>Warna :<?= $_GET["warna"]; ?></li>
<li>Jenis Kendaraan :<?= $_GET["jenis"]; ?></li>
<li>Tahun :<?= $_GET["tahun"]; ?></li>
<li>Harga :<?= $_GET["harga"]; ?></li>
<br>
<a href="latihan2.php">Kembali ke daftar mobil</a>
</body>
</html>