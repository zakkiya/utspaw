<?php
include "koneksi.php";
$id = $_GET['id_097'];
$sql= "DELETE FROM tbl_097 WHERE id_097= $id";
$hasil= mysqli_query($koneksi,$sql);
if (!$hasil){
    echo "Delete Data Gagal";
}else{
    echo" Data Berhasil Dihapus <br>";
    echo" <a href='data.php'><h3>Tampilkan Data <h3></a>";
}
?>