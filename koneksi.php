<?php
$conn_str = "host=tiny.db.elephantsql.com " .
    "port=5432 " .
    "user=ehdyeilt " .
    "dbname=ehdyeilt " .
    "password=b3sIBCaTCo8YL9bgDu8jdEMPhlK8Elt8";
$conn = pg_connect($conn_str);

// if($conn) {
//     echo "<h3>Koneksi Berhasil</h3>";
// } else {
//     echo "<h3>Koneksi GAGAL TERSAMBUNG</h3>";
// }
?>