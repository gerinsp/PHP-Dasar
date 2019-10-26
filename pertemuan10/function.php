<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpmobil");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ) {
        $rows[] = $row;
    }
    return $rows;

}


function tambah($data) {
    global $conn;

    $merk = htmlspecialchars($data["merk"]);
    $warna = htmlspecialchars($data["warna"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

     // query insert data
     $query = "INSERT INTO mobilsaya VALUES('', '$merk', '$warna', '$jenis', '$tahun', '$harga', '$gambar')";
     mysqli_query($conn, $query); 

     return mysqli_affected_rows($conn);

}

function hapus($id) {
    global $conn;

    mysqli_query($conn, "DELETE FROM mobilsaya WHERE id = $id");
    return mysqli_affected_rows($conn);

}



?>
