<?php
include 'koneksi.php';
$id=$_POST['id_097'];
$nama=$_POST['nama_097'];
$email=$_POST['email_097'];
$alamat=$_POST['alamat_097'];
$sql= "UPDATE tbl_097 SET nama_097='$nama', email_097='$email', alamat_097='$alamat' WHERE id_097=$id";
$hasil = mysqli_query($koneksi,$sql);
if (!$hasil){
    echo "Update Data  Gagal";
}else {
    echo "Update Data  Berhasil <br>";
    echo" <a href='data.php'> Tampilkan Data Sekarang</a>";
}
?>