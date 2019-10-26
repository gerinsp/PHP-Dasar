 <?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'function.php';

// pagination
// konfigurasi
$jumlahDataPerhalaman = 2;
$jumlahData = count(query("SELECT * FROM mobilsaya"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerhalaman * $halamanAktif ) - $jumlahDataPerhalaman;

$mobil = query("SELECT * FROM mobilsaya LIMIT $awalData, $jumlahDataPerhalaman");

// tombol cari ditekan
if( isset($_POST["cari"]) ) {
    $mobil = cari($_POST["keyword"]);
}

if( isset($_SESSION['username']) ) {
    $user_login = $_SESSION['username'];
}

if( isset($_POST['logout']) ) {
    header("Location: logout.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<form action="" method="post">
<table  border="0" cellpadding="10" cellspacing="0">
<tr>
    <th>Selamat Datang, <?= ($user_login) ?>!</th>
    <th><button type="submit" name="logout">Logout!</button></th>
</tr>
</table>

<h1>Daftar Harga Mobil</h1>

<a href="tambah.php">Tambah Data Mobil</a>
<br><br>
    <input type="text" name="keyword" size="30" autofocus
    placeholder="Masukan keyword pencarian.." autocomplete="off">
    <button type="submit" name="cari">Cari!</button>
</form>
<br>

<!-- navigasi -->

<?php if( $halamanAktif > 1 ) : ?>
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for( $i = 1; $i <= $jumlahHalaman; $i++ ) : ?>
    <?php if( $i == $halamanAktif ) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
    <?php else : ?>
    <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>        
    <?php endif; ?>
<?php endfor; ?>

<?php if( $halamanAktif < $jumlahHalaman ) : ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>

<br>
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
    <?php foreach( $mobil as $row ) :?>
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