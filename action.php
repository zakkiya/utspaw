<?php
include "koneksi.php";
$nama=$_POST['nama_097'];
$email=$_POST['email_097'];
$alamat=$_POST['alamat_097'];
$sql="INSERT INTO tbl_097 VALUES (null,'$nama','$email', '$alamat')";
$hasil=mysqli_query($koneksi,$sql);
if(!$hasil){
    echo" Tambah Data Tidak Berhasil";
}else{
    echo" Tambah Data  Berhasil<br>";
    echo"<a href='data.php'>Tampilkan Data </a>";
}
?>