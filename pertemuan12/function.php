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

function ubah($data) {
    global $conn;

    $id = $data["id"];
    $merk = htmlspecialchars($data["merk"]);
    $warna = htmlspecialchars($data["warna"]);
    $jenis = htmlspecialchars($data["jenis"]);
    $tahun = htmlspecialchars($data["tahun"]);
    $harga = htmlspecialchars($data["harga"]);
    $gambar = htmlspecialchars($data["gambar"]);

     // query updatef data
     $query = "UPDATE mobilsaya SET 
                 merk = '$merk', 
                 warna= '$warna', 
                 jenis ='$jenis',
                 tahun = '$tahun',
                 harga = '$harga', 
                 gambar = '$gambar'
                 WHERE id = $id
                 ";
     mysqli_query($conn, $query); 

     return mysqli_affected_rows($conn);

}

function cari($keyword) {
    $query = "SELECT * FROM mobilsaya WHERE
                merk LIKE '%$keyword%' OR
                warna LIKE '%$keyword%' OR
                jenis LIKE '%$keyword%' OR
                tahun LIKE '%$keyword%' OR
                harga LIKE '%$keyword%'
                
                ";
    return query($query);
}
?>
