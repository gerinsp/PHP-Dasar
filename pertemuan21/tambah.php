<?php
session_start();

if( !isset($_SESSION["login"]) ) {
    header("Location: login.php");
    exit;
}

require 'function.php'; 
// cek apakah tombol submit sudah ditekan atauf belum
if( isset($_POST["submit"]) ) {
    
     // cek apakah data berhasil ditambahkan atau tidak
     if( tambah($_POST) > 0 ) {
         echo "
            <script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
            ";
     } else {
         echo "
            <script>
                alert('data gagal ditambahkan!');
            </script>
         ";
     }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mobil</title>
</head>
<body>
    <h1>Tambah Data Mobil</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <ul>
            <li>
                <label for="merk">Merk Kendaraan :</label>
                <input type="text" name="merk" id="merk" required>
            </li>
            <li>
                <label for="warna">Warna :</label>
                <input type="text" name="warna" id="warna" required>
            </li>
            <li>
                <label for="jenis">Jenis Kendaraan :</label>
                <input type="text" name="jenis" id="jenis" required>
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" id="tahun" required>
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required>
            </li>
            <li>
                <label for="gambar">Gambar :</label>
                <input type="file" name="gambar" id="gambar">
            </li>
            <li><button type="submit" name="submit">Tambah Data!</button></li>
        </ul> 
        
    <a href="index.php">Kembali Ke Menu</a>
    </form> 
</body>
</html>