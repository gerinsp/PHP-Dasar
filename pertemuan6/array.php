<?php 

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
    <title>Document</title>
</head>
<body>
   <h1>Daftar Harga Mobil</h1> 

   <?php foreach( $mobil as $mbl ) : ?>
        <ul>
            <li>
                <img src="img/<?= $mbl["gambar"]; ?>">
            </li>
            <li><b>Merk Kendaraan : </b><?= $mbl["merk kendaraan"]; ?></li>
            <li><b>Warna : </b><?= $mbl["warna"]; ?></li>
            <li><b>Jenis Kendaraan : </b><?= $mbl["jenis kendaraan"]; ?></li>
            <li><b>Tahun : </b><?= $mbl["tahun"]; ?></li>
            <li><b>Harga : </b><?= $mbl["harga"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>   