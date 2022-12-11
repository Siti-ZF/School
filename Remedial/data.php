<?php
include('koneksi.php');
If ($_SERVER["REQUEST_METHOD"]=="POST"){
    $Username=mysqli_real_escape_string($koneksi,$_POST['Username']);
    $Password=mysqli_real_escape_string($koneksi,md5($_POST['Password']));
    $query="SELECT*FROM user WHERE Username='$Username' AND Password='$Password'";
    $querydb=mysqli_query($koneksi,$query);
    $cek=mysqli_num_rows($querydb);
    If ($cek>0) {
        $getdata=mysqli_fetch_array($querydb);
        header("location: Welcome.php");
    }else {
        echo "Username dan Password Salah";
    }
}
?>