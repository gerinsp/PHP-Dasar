 <?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}
require 'function.php';
$mobil = query("SELECT * FROM mobilsaya");

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

if( isset($_POST['cetak']) ) {
    header("Location: cetak.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 198px;
            left: 223px;
            z-index: -1;
            display: none;
        }
        
    </style>

    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
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

<a href="cetak.php"  target="_blank"><img src="img/cetak.png" width="35"></a>
<br><br>
    <input type="text" name="keyword" size="30" autofocus
    placeholder="Masukan keyword pencarian.." autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>

    <img src="img/loader.gif" class="loader">

    
</form>
<br>

<div id="container">
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
            <a href="ubah.php?id=<?= $row["id"]; ?>" >ubah</img> |
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
    </div> 

</body>
</html>