<?php 
// Metode GET , $_GET

$mobil = [
    ["merk kendaraan"=>"Lamborgini",
     "warna"=>"hitam",
     "jenis kendaraan"=>"mobil sport",
     "tahun"=>"2017",
     "harga"=>"1.2M",
     "gambar"=>"mobil1.jpg"
    ],   
    ["merk kendaraan"=>"Lamborgini",
    "warna"=>"merah",
    "jenis kendaraan"=>"mobil sport",
    "tahun"=>"2018",
    "harga"=>"22M",
    "gambar"=>"mobil2.jpg"
    ],
    ["merk kendaraan"=>"Lamborgini",
    "warna"=>"kuning",
    "jenis kendaraan"=>"mobil sport",
    "tahun"=>"2019",
    "harga"=>"10M",
    "gambar"=>"mobil3.jpg"
    ],
    ["merk kendaraan"=>"BMW",
    "warna"=>"abu-abu",
    "jenis kendaraan"=>"mobil sport",
    "tahun"=>"2018",
    "harga"=>"12M",
    "gambar"=>"mobil4.jpg"
    ],
    ["merk kendaraan"=>"BMW",
    "warna"=>"Hitam",
    "jenis kendaraan"=>"mobil sport",
    "tahun"=>"2019",
    "harga"=>"32M",
    "gambar"=>"mobil5.jpg"
    ]
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>GET</title>
</head>
<body>

<h1>Daftar Harga Mobil</h1>
<ul>
<?php foreach( $mobil as $mbl ) : ?> 
    <li>
    <a href="latihan3.php?merk=<?= $mbl["merk kendaraan"]; ?>
        &warna=<?= $mbl["warna"]; ?>&jenis=<?= $mbl
        ["jenis kendaraan"]; ?>&tahun=<?= $mbl["tahun"]; ?>
        &harga=<?= $mbl["harga"]; ?>&gambar=<?= $mbl["gambar"]; ?>"><?= $mbl["merk kendaraan"]; ?></a>
    </li>   
<?php endforeach; ?>
</ul>
</body>
</html>