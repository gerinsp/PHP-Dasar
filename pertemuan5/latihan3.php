<?php
$mahasiswa = [
    ["Gerin Sena Pratama","432007006180161"
            ,"Teknik Informatika","denapratama7@gmail.com"],
    ["Eris Sulistina","432007006180072"
            ,"Teknik Informatika","deris@gmail.com"]   
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<h1>Daftar Mahasiswa</h1>
<?php foreach( $mahasiswa as $mhs ) : ?>
<ul>
    <li>Nama:<?= $mhs[0]; ?></li>
    <li>NRP:<?= $mhs[1]; ?></li>
    <li>jurusan:<?= $mhs[2]; ?></li>
    <li>Email:<?= $mhs[3]; ?></li>

</ul>
<?php endforeach; ?>   
</body>
</html>