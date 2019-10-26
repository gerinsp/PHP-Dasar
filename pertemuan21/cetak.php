<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'function.php';
$mobil = query("SELECT * FROM mobilsaya");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Harga Mobil</title>
</head>
<body>
    <h1>Daftar Harga Mobil</h1>
    <table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</th>
        <th>Gambar</th>
        <th>Merk Kendaraan</th>
        <th>Warna</th>
        <th>Jenis Kendaraan</th>
        <th>Tahun</th>
        <th>Harga</th>
    </tr>';
    $i = 1;
    foreach( $mobil as $row ) {
        $html .= '<tr>
            <td>'. $i++ .'</td>
            <td><img src="img/'. $row["gambar"] .'" width="50"></td>
            <td>'. $row["merk"] .'</td>
            <td>'. $row["warna"] .'</td>
            <td>'. $row["jenis"] .'</td>
            <td>'. $row["tahun"] .'</td>
            <td>'. $row["harga"] .'</td>
        </tr>';
    }
$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-harga-mobil.pdf', \Mpdf\Output\Destination::INLINE);

?>

