<?php
function salam($nama) {
$waktu = "";
$a = date("");

if (($a>=6) && ($a<=11)) {
    $waktu = "Pagi";
} elseif (($a>11) && ($a<=15)) {
    $waktu = "Siang";
} elseif (($a>15) && ($a<=18)) {
    $Waktu = "Sore";
} else {
    $waktu = "Malam";
}
    return "Selamat $waktu, $nama!";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>latihan function</title>
</head>
<body>
    <h1><?php echo salam("Gerin"); ?></h1>
</body>
</html>