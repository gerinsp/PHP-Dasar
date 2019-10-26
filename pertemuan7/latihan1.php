<?php
// variabel scope
$x = 10;

function tampil() {
    global $x;
    echo $x;
}
tampil();
?>

