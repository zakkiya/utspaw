<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title> FORM EDIT</title>
</head>
<body>
    <?php
        include 'koneksi.php';
        $id = $_GET['id_097'];
        $sql= "SELECT * FROM tbl_097 WHERE id_097 = $id";
        $hasil= mysqli_query($koneksi,$sql);
        if (!$hasil){
        echo " query yang anda masukkan salah";
        }
        ?>
        <h1> Form Edit </h1>
        <?php
        while ($row=mysqli_fetch_array($hasil))
        {
        ?>
        
        <form method="post" action= "update.php" class=" border p-3 mt-3">
            <input type="hidden" name="id_097" VALUE="<?php echo $row['id_097']?>">
            NAMA  : <input type="text" name="nama_097" VALUE="<?php echo $row['nama_097']?>"></br>
            EMAIL : <input type="text" name="email_097" VALUE="<?php echo $row['email_097']?>"></br>
            ALAMAT : <input type="text" name="alamat_097" VALUE="<?php echo $row['alamat_097']?>"></br>
            <button type="submit" class="btn btn-info"> UPDATE </button>
    </form>
    <?php } ?>
</body>
</html>