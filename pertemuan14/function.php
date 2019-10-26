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
    
    // upload gambar
    $gambar = upload();
    if( !$gambar ) {
        return false; 
    }
     // query insert data
     $query = "INSERT INTO mobilsaya VALUES('', '$merk', '$warna', '$jenis', '$tahun', '$harga', '$gambar')";
     mysqli_query($conn, $query); 

     return mysqli_affected_rows($conn);

}

function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek apakah tidak ada gambar yang di upload

    if( $error === 4 ) {
            echo "<script>
                    alert('pilih gambar terlebih dahlu!');
                  </script>";
            return false;
    }

    // cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if ( !in_array($ekstensiGambar, $ekstensiGambarValid) ) {
        echo "<script>
                alert('format gambar salah!');
            </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000 ) {
        echo "<script>
                alert('ukuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // tentukan lokasi gambar
    // generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    move_uploaded_file($tmpName, 'img/' . $namaFileBaru);

    return $namaFileBaru;


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
    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek apakah user pilih gambar lama atau baru
    if( $_FILES['gambar']['error'] === 4 ) {
        $gambar = $gambarLama;  
    } else {
        $gambar = upload();
    }
    

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

function registrasi($data) {
    global $conn;

    $username = strtolower(stripcslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");

    if( mysqli_fetch_assoc($result) ) {
        echo "<script>
                alert('username sudah tersedia!');
              </script>";

              return false;
    }

    // cek konfirmasi password
    if( $password !== $password2 ) {
        echo "<script>
                alert('konfirmasi password tidak sesuai!');
              </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);

}









?>
