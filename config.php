<?php

$db_host = "127.0.0.1:3307";
$db_user = "root";
$db_pass = "";
$db_name = "savepuss";

// buat koneksi
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_name);

// cek berhasil atau gagal
if(!$conn) {
    echo "Koneksi Gagal";
}
?>