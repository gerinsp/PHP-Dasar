<?php
require 'function.php'; 
// ambil data mobil
$id = $_GET["id"];
// query data mobil
$mbl = query("SELECT * FROM mobilsaya WHERE id = $id")[0];
// cek apakah tombol submit sudah ditekan atauf belum
if( isset($_POST["submit"]) ) {
    
     // cek apakah data berhasil diubah atau tidak
     if( ubah($_POST) > 0 ) {
         echo "
            <script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>
            ";
     } else {
         echo "
            <script>
                alert('data gagal diubah!');
                document.location.href = 'index.php'; 
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
    <title>Ubah Data Mobil</title>
</head>
<body>
    <h1>Ubah Data Mobil</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?= $mbl["id"]; ?>">
        <input type="hidden" name="gambarLama" value="<?= $mbl["gambar"]; ?>">

        <ul>
            <li>
                <label for="merk">Merk Kendaraan :</label>
                <input type="text" name="merk" id="merk" required
                value="<?= $mbl["merk"]; ?>">
            </li>
            <li>
                <label for="warna">Warna :</label>
                <input type="text" name="warna" id="warna" required
                value="<?= $mbl["warna"]; ?>">
            </li>
            <li>
                <label for="jenis">Jenis Kendaraan :</label>
                <input type="text" name="jenis" id="jenis" required
                value="<?= $mbl["jenis"]; ?>">
            </li>
            <li>
                <label for="tahun">Tahun :</label>
                <input type="text" name="tahun" id="tahun" required
                value="<?= $mbl["tahun"]; ?>">
            </li>
            <li>
                <label for="harga">Harga :</label>
                <input type="text" name="harga" id="harga" required
                value="<?= $mbl["harga"]; ?>">
            </li>
            <li>
                <label for="gambar">Gambar :</label><br>
                 <img src="img/<?= $mbl['gambar']; ?>" width="100"><br> 
                <input type="file" name="gambar" id="gambar">
            </li>
            <li><button type="submit" name="submit">Ubah!</button></li>
        </ul> 
        
    <a href="index.php">Kembali Ke Menu</a>
    </form> 
</body>
</html>