<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1 style="text-align:center">Daftar Mahasiswa </h1>
    <br><br><br><br>
    <button type="submit" class="btn btn-info"><a href="formtambah.php"><h5><b>+</b>TAMBAH DAFTAR MAHASISWA</h5></button></a>
    <br><br>
    <table class="table table-dark table-hover">
        <tr style="text-align:center">
            <td><b>ID</b></td>
            <td><b>NAMA</b></td>
            <td><b>EMAIL</b></td>
            <td><b>ALAMAT</b></td>
            <td><b>AKSI</b></td>
        </tr>
        <?php
        include "koneksi.php";
        $sql= "SELECT * FROM tbl_097";
        $hasil= mysqli_query($koneksi,$sql);
        while ($row = mysqli_fetch_array($hasil)){
            ?>
            <tr style="text-align:center">
                <td><?=$row['id_097'];?></td>
                <td><?=$row['nama_097'];?></td>
                <td><?=$row['email_097'];?></td>
                <td><?=$row['alamat_097'];?></td>
                <td><button type= "submit" class="btn btn-warning"><a href="fromedit.php?id_097=<?= $row['id_097']?>">
                EDIT</button></a> | | <button type= "submit" class="btn btn-danger"><a href="delete.php?id_097=<?= $row['id_097']?>">
                HAPUS DATA</button></a></td>
        </tr>
        <?php
        }
        ?>
    </table>
    </body>
    </html>