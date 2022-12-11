<?php
define ('DB_HOST','localhost');
define ('DB_USERNAME','root');
define ('DB_PASSWORD','');
define ('DB_DATABASE','siswaberprestasi');
$koneksi=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
/*if ($koneksi) {
    echo "koneksi berhasil";
    mysqli_close($koneksi);
}else{
    die("koneksi gagal: " . mysqli_connect_error());
}*/