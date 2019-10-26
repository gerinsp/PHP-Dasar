<?php

require 'function.php';
$mahasiswa = query("SELECT * FROM mobilsaya");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Harga Mobil</h1>

<a href="tambah.php">Tambah Data Mobil</a>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Merk Kendaraan</th>
        <th>Warna</th>
        <th>Jenis Kendaraan</th>
        <th>Tahun</th>
        <th>Harga</th>
    </tr>
    <?php $i = 1; ?>
    <?php foreach( $mahasiswa as $row ) :?>
    <tr>
        <td><?= $i; ?> </td>
        <td>
            <a href="ubah.php?id=<?= $row["id"]; ?>" >ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                return confirm('apakah anda yakin!');">hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["merk"]; ?></td>
        <td><?= $row["warna"]; ?></td>
        <td><?= $row["jenis"]; ?></td>
        <td><?= $row["tahun"]; ?></td>
        <td><?= $row["harga"]; ?></td>
    </tr>
    <?php $i++; ?>
<?php endforeach; ?>  
    </table>
</body>
</html>