<?php
$Nis = $_POST['NIS']; 
$Nama_siswa = $_POST['nama'];
$Kelas = $_POST['kelas'];
$Jurusan = $_POST['jurusan'];
$Prestasi = $_POST['prestasi'];

echo "<font color='red'> Pendaftaran Siswa Berprestasi </font><br>";
echo "NIS           :   ".$Nis, "<br>";
echo "Nama Siswa    :   ".$Nama_siswa, "<br>";
echo "Kelas         :   ".$Kelas, "<br>";
echo "Jurusan       :   ".$Jurusan, "<br>";
echo "Prestasi      :   ".$Prestasi, "<br>";
?>